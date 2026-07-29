<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use Config\Services;

class LeadController extends BaseController
{
    private const LEGACY_RECAPTCHA_SECRET = '6LccxMUUAAAAALj4lx6Bfu6WIoyluFLdeNG8ZnSI';
    private const LEAD_ENDPOINT = 'http://intelligible.co.in/get_lead/old_leads';

    public function submit()
    {
        $post = $this->request->getPost();

        if (isset($post['submit_without_captcha'])) {
            return $this->handleAjaxLead($post);
        }

        if (isset($post['submit'])) {
            return $this->handleRecaptchaLead($post);
        }

        if (isset($post['c_submition'])) {
            return $this->handleCallbackLead($post);
        }

        return redirect()->back()->with('error', 'Invalid form submission.');
    }

    private function handleAjaxLead(array $post)
    {
        if ($this->hasEmptyRequiredFields($post, ['Name', 'Mobile', 'Email', 'City'])) {
            return $this->response->setJSON([
                'status' => 'failed',
                'reason' => 'empty_fields',
            ]);
        }

        $this->submitLead($this->buildStandardLeadFields($post));

        return $this->response->setJSON(['status' => 'success']);
    }

    private function handleRecaptchaLead(array $post): RedirectResponse
    {
        $captchaResponse = trim((string) ($post['g-recaptcha-response'] ?? ''));

        if ($captchaResponse === '') {
            return $this->redirectWithQueryBack('error', 'Please_check_on_the_reCAPTCHA_box');
        }

        if (! $this->verifyRecaptcha($captchaResponse)) {
            return $this->redirectWithQueryBack('error', 'Robot-verification-failed,please-try-again.');
        }

        $this->submitLead($this->buildStandardLeadFields($post));

        $returnUrl = trim((string) ($post['return_url'] ?? site_url()));

        return redirect()->to($returnUrl);
    }

    private function handleCallbackLead(array $post): RedirectResponse
    {
        $this->submitLead($this->buildCallbackLeadFields($post));

        $pageUrl = trim((string) ($post['page_url'] ?? current_url()));
        $separator = str_contains($pageUrl, '?') ? '&' : '?';
        $returnUrl = $pageUrl . $separator . 'status=success';

        if (! str_contains($pageUrl, '#book_appointment_form') && ! str_contains($pageUrl, 'contact')) {
            $returnUrl .= '#book_appointment_form';
        }

        return redirect()->to($returnUrl);
    }

    private function buildStandardLeadFields(array $post): array
    {
        $fields = [
            'name' => trim((string) ($post['Name'] ?? '')),
            'mobile' => trim((string) ($post['Mobile'] ?? '')),
            'email' => trim((string) ($post['Email'] ?? '')),
            'city' => trim((string) ($post['City'] ?? '')),
            'country' => trim((string) ($post['Country'] ?? '')),
            'lp_url' => trim((string) ($post['lp_url'] ?? '')),
            'return_url' => trim((string) ($post['return_url'] ?? '')),
            'lead_source' => trim((string) ($post['lead_source'] ?? '')),
            'service' => trim((string) ($post['enquire_for'] ?? 'Hair Transplant')),
            'page_url' => trim((string) ($post['page_url'] ?? current_url())),
            'submit_lead' => 'submit',
            'source_site' => 'AKClinics',
        ];

        if (isset($post['paid_lead'])) {
            $fields['paid_lead'] = $post['paid_lead'];
        }

        return $fields;
    }

    private function buildCallbackLeadFields(array $post): array
    {
        $fields = [
            'name' => trim((string) ($post['Name'] ?? '')),
            'mobile' => trim((string) ($post['Mobile'] ?? '')),
            'email' => trim((string) ($post['Email'] ?? '')),
            'city' => trim((string) ($post['City'] ?? '')),
            'page_url' => trim((string) ($post['page_url'] ?? current_url())),
            'submit_lead' => 'submit',
            'source_site' => trim((string) ($post['source_website'] ?? 'akclinics.in')),
        ];

        if (! empty($post['Message'])) {
            $fields['message'] = trim((string) $post['Message']);
        } else {
            $fields['service'] = trim((string) ($post['c_enquire_for'] ?? 'Hair Transplant'));
            $fields['Preferred_Time'] = trim((string) ($post['Preferred_Time'] ?? ''));
        }

        if (isset($post['paid_lead'])) {
            $fields['paid_lead'] = $post['paid_lead'];
        }

        return $fields;
    }

    private function submitLead(array $fields): void
    {
        try {
            $client = Services::curlrequest([
                'timeout' => 10,
                'http_errors' => false,
            ]);

            $client->post(self::LEAD_ENDPOINT, ['form_params' => $fields]);
        } catch (\Throwable) {
            log_message('error', 'Lead submission failed for page: {page}', [
                'page' => $fields['page_url'] ?? 'unknown',
            ]);
        }
    }

    private function verifyRecaptcha(string $captchaResponse): bool
    {
        $secret = env('recaptcha.secret', self::LEGACY_RECAPTCHA_SECRET);

        try {
            $client = Services::curlrequest([
                'timeout' => 10,
                'http_errors' => false,
            ]);

            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => $secret,
                    'response' => $captchaResponse,
                    'remoteip' => $this->request->getIPAddress(),
                ],
            ]);

            $body = json_decode($response->getBody(), true);

            return (bool) ($body['success'] ?? false);
        } catch (\Throwable) {
            return false;
        }
    }

    private function hasEmptyRequiredFields(array $post, array $fields): bool
    {
        foreach ($fields as $field) {
            if (trim((string) ($post[$field] ?? '')) === '') {
                return true;
            }
        }

        return false;
    }

    private function redirectWithQueryBack(string $key, string $value): RedirectResponse
    {
        $referer = previous_url() ?: site_url();
        $separator = str_contains($referer, '?') ? '&' : '?';

        return redirect()->to($referer . $separator . $key . '=' . $value);
    }
}
