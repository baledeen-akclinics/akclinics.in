<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class ContactController extends Controller
{
    public function submit()
    {
        // Validation Rules
        $rules = [
            'full_name'    => 'required|min_length[3]|max_length[100]',
            'mobile'       => 'required|numeric|exact_length[10]',
            'email'        => 'required|valid_email',
            'city'         => 'required|max_length[100]',
            'procedure'    => 'required',
            'procedure_id' => 'required|integer',

        ];

        // Validation Check
        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }

        // Helper: POST value or null when missing/empty (no validation error)
        $attr = function (string $key) {
            $value = $this->request->getPost($key);
            return ($value !== null && $value !== '') ? $value : null;
        };

        // API Payload (Static values for testing)
        $payload = [
            "name"                  => $this->request->getPost('full_name'),
            "email"                 => $this->request->getPost('email'),
            "mobile_country_code"   => "91",
            "mobile"                => $this->request->getPost('mobile'),
            "city"                  => $this->request->getPost('city'),

            // Static values
            "source_id"             => "website-contact-form",
            "source_url" => $attr('source_url'),
            "description"           => $this->request->getPost('Message'),
            "campaign_id"           => $attr('campaign_id'),
            "campaign_name"         => $attr('campaign_name'),
            "ad_id"                 => null,
            "ad_name"               => null,
            "form_id"               => "website-contact-form",
            "form_name"             => $attr('form_name') ?? 'Contact Us',

            // Dynamic procedure id
            "procedure_category_id" => (int) $this->request->getPost('procedure_id'),

            // Lead Attribution — from hidden fields (cookie → form → POST); missing = null
            "utm_source"            => $attr('utm_source'),
            "utm_medium"            => $attr('utm_medium'),
            "utm_campaign"          => $attr('utm_campaign'),
            "utm_content"           => $attr('utm_content'),
            "utm_term"              => $attr('utm_term'),
            "gclid"                 => $attr('gclid'),
            "fbclid"                => $attr('fbclid'),
            "landing_page"          => $attr('landing_page'),
            "referrer"              => $attr('referrer'),

            "first_touch_source"        => $attr('first_touch_source'),
            "first_touch_medium"        => $attr('first_touch_medium'),
            "first_touch_channel"       => $attr('first_touch_channel'),
            "first_touch_campaign"      => $attr('first_touch_campaign'),
            "first_touch_referrer"      => $attr('first_touch_referrer'),
            "first_touch_landing_page"  => $attr('first_touch_landing_page'),
            "first_touch_at"            => $attr('first_touch_at'),

            "last_touch_source"         => $attr('last_touch_source'),
            "last_touch_medium"         => $attr('last_touch_medium'),
            "last_touch_channel"        => $attr('last_touch_channel'),
            "last_touch_campaign"       => $attr('last_touch_campaign'),
            "last_touch_referrer"       => $attr('last_touch_referrer'),
            "last_touch_landing_page"   => $attr('last_touch_landing_page'),
            "last_touch_at"             => $attr('last_touch_at'),
        ];

        try {

            $client = Services::curlrequest();

            $campaignLeadApi = env('api.baseURL') . '/campaign-leads';

            $response = $client->post(
                $campaignLeadApi,
                [
                    'http_errors' => false,
                    'headers' => [
                        'Accept'       => 'application/json',
                        'Content-Type' => 'application/json',
                    ],
                    'json' => $payload
                ]
            );

            return $this->response->setJSON([
                'payload'      => $payload,
                'status_code'  => $response->getStatusCode(),
                'response'     => json_decode($response->getBody(), true),
                'raw_response' => $response->getBody(),
            ]);
        } catch (\Throwable $e) {

            return $this->response->setStatusCode(500)->setJSON([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
