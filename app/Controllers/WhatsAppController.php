<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class WhatsAppController extends BaseController
{
    public function redirect()
    {
        /*
        |--------------------------------------------------------------------------
        | 1. Get UTM / Click ID values from current URL
        |--------------------------------------------------------------------------
        */

        $utmSource   = $this->request->getGet('utm_source');
        $utmMedium   = $this->request->getGet('utm_medium');
        $utmCampaign = $this->request->getGet('utm_campaign');
        $utmContent  = $this->request->getGet('utm_content');
        $utmTerm     = $this->request->getGet('utm_term');
        $gclid       = $this->request->getGet('gclid');
        $fbclid      = $this->request->getGet('fbclid');


        /*
        |--------------------------------------------------------------------------
        | 2. Get existing attribution cookie
        |--------------------------------------------------------------------------
        |
        | Agar URL mein UTM nahi mila to cookie se lene ki koshish karenge.
        |
        */

        $cookieData = [];

        $cookie = $this->request->getCookie('lead_attribution');

        if (!empty($cookie)) {

            $decodedCookie = urldecode($cookie);

            $jsonData = json_decode($decodedCookie, true);

            if (is_array($jsonData)) {
                $cookieData = $jsonData;
            }
        }


        /*
        |--------------------------------------------------------------------------
        | 3. URL value ko priority
        |--------------------------------------------------------------------------
        |
        | Agar current URL mein UTM hai to wahi use hoga.
        | Agar URL mein nahi hai to cookie ki value use hogi.
        |
        */

        $utmSource = !empty($utmSource)
            ? $utmSource
            : ($cookieData['utm_source'] ?? null);

        $utmMedium = !empty($utmMedium)
            ? $utmMedium
            : ($cookieData['utm_medium'] ?? null);

        $utmCampaign = !empty($utmCampaign)
            ? $utmCampaign
            : ($cookieData['utm_campaign'] ?? null);

        $utmContent = !empty($utmContent)
            ? $utmContent
            : ($cookieData['utm_content'] ?? null);

        $utmTerm = !empty($utmTerm)
            ? $utmTerm
            : ($cookieData['utm_term'] ?? null);

        $gclid = !empty($gclid)
            ? $gclid
            : ($cookieData['gclid'] ?? null);

        $fbclid = !empty($fbclid)
            ? $fbclid
            : ($cookieData['fbclid'] ?? null);


        /*
        |--------------------------------------------------------------------------
        | 4. Source URL
        |--------------------------------------------------------------------------
        */

        $sourceUrl = $this->request->getServer('HTTP_REFERER');

        if (empty($sourceUrl)) {
            $sourceUrl = 'https://www.youtube.com/';
        }


        /*
        |--------------------------------------------------------------------------
        | 5. Prepare Campaign Leads API payload
        |--------------------------------------------------------------------------
        |
        | Dynamic values:
        | UTM / GCLID / FBCLID / source URL
        |
        | Static values:
        | campaign / form / source ID etc.
        |
        */

        $payload = [

            // User information
            // YouTube click ke time ye details available nahi hain
            'name' => null,
            'email' => null,
            'mobile_country_code' => '91',
            'mobile' => null,
            'city' => null,


            // Static source information
            'source_id' => 'website-whatsapp',

            'source_url' => $sourceUrl,

            'description' => 'WhatsApp lead from YouTube',


            // Static campaign information
            'campaign_id' => '120212345678901234',

            'campaign_name' => 'Website Organic',


            // Advertisement information
            'ad_id' => null,
            'ad_name' => null,


            // Static form information
            'form_id' => 'website-whatsapp',

            'form_name' => 'YouTube WhatsApp',


            // Static procedure
            'procedure_category_id' => 1,


            // Dynamic attribution information
            'utm_source' => $utmSource,

            'utm_medium' => $utmMedium,

            'utm_campaign' => $utmCampaign,

            'utm_content' => $utmContent,

            'utm_term' => $utmTerm,

            'gclid' => $gclid,

            'fbclid' => $fbclid,
        ];


        /*
        |--------------------------------------------------------------------------
        | 6. Campaign Leads API URL
        |--------------------------------------------------------------------------
        */

        $apiUrl = 'https://test.intelligible.co.in/api/v1/campaign-leads';


        /*
        |--------------------------------------------------------------------------
        | 7. Send data to Campaign Leads API
        |--------------------------------------------------------------------------
        */

        try {

            $client = \Config\Services::curlrequest();

            $response = $client->post($apiUrl, [

                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],

                'json' => $payload,

                'http_errors' => false,
            ]);


            /*
            |--------------------------------------------------------------------------
            | 8. Get API response
            |--------------------------------------------------------------------------
            */

            $statusCode = $response->getStatusCode();

            $responseBody = $response->getBody();


            /*
            |--------------------------------------------------------------------------
            | 9. Log API response
            |--------------------------------------------------------------------------
            |
            | Testing/debugging ke liye useful hai.
            |
            */

            log_message(
                'info',
                'WhatsApp Campaign Lead API Response: ' .
                $statusCode .
                ' - ' .
                $responseBody
            );


        } catch (\Throwable $e) {

            /*
            |--------------------------------------------------------------------------
            | API error
            |--------------------------------------------------------------------------
            */

            log_message(
                'error',
                'WhatsApp Campaign Lead API Error: ' .
                $e->getMessage()
            );
        }


        /*
        |--------------------------------------------------------------------------
        | 10. Redirect user to WhatsApp
        |--------------------------------------------------------------------------
        */

        $whatsappNumber = '9191799028861';

        $whatsappUrl = 'https://wa.me/' . $whatsappNumber;


        /*
        |--------------------------------------------------------------------------
        | 11. Automatic redirect
        |--------------------------------------------------------------------------
        */

        return redirect()->to($whatsappUrl);
    }
}