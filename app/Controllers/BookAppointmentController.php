<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class BookAppointmentController extends Controller
{
    public function submit()
    {
        // Validation Rules
        $rules = [
            'Name'             => 'required|min_length[3]|max_length[100]',
            'Mobile'           => 'required|regex_match[/^[6-9]\d{9}$/]',
            'Email'            => 'required|valid_email',
            'City'             => 'required|max_length[100]',
            'procedure'        => 'required',
            'procedure_id'     => 'required|integer',
            'Preferred_Time'   => 'required',
        ];

        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }

        $payload = [
            "name"                  => trim($this->request->getPost('Name')),
            "email"                 => trim($this->request->getPost('Email')),
            "mobile_country_code"   => "91",
            "mobile"                => trim($this->request->getPost('Mobile')),
            "city"                  => trim($this->request->getPost('City')),

            "source_id"             => "website-book-appointment",
            "source_url"            => $this->request->getPost('page_url'),
            "description"           => "Preferred Time : " . $this->request->getPost('Preferred_Time'),

            "campaign_id"           => "120212345678901234",
            "campaign_name"         => "Website",

            "ad_id"                 => null,
            "ad_name"               => null,

            "form_id"               => "website-book-appointment",
            "form_name"             => "Book Appointment",

            "procedure_category_id" => (int) $this->request->getPost('procedure_id'),
        ];

        try {

            $client = Services::curlrequest();

            $apiUrl = env('api.baseURL') . '/campaign-leads';

            $response = $client->post($apiUrl, [
                'http_errors' => false,
                'headers' => [
                    'Accept'       => 'application/json',
                    'Content-Type' => 'application/json',
                ],
                'json' => $payload
            ]);

            $responseBody = json_decode($response->getBody(), true);

            return $this->response->setJSON([
                'status'      => $response->getStatusCode() == 200,
                'status_code' => $response->getStatusCode(),
                'message'     => $responseBody['message'] ?? 'Success',
                'response'    => $responseBody
            ]);
        } catch (\Throwable $e) {

            return $this->response->setStatusCode(500)->setJSON([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
