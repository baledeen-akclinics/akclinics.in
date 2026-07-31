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

        // API Payload (Static values for testing)
        $payload = [
            "name"                  => $this->request->getPost('full_name'),
            "email"                 => $this->request->getPost('email'),
            "mobile_country_code"   => "91",
            "mobile"                => $this->request->getPost('mobile'),
            "city"                  => $this->request->getPost('city'),

            // Static values
            "source_id"             => "website-contact-form",
            "source_url"            => "https://www.akclinics.com/contact",
            "description"           => $this->request->getPost('Message'),
            "campaign_id"           => "120212345678901234",
            "campaign_name"         => "Website Organic",
            "ad_id"                 => null,
            "ad_name"               => null,
            "form_id"               => "website-contact-form",
            "form_name"             => "Contact Us",

            // Dynamic procedure id
            "procedure_category_id" => (int) $this->request->getPost('procedure_id'),
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
