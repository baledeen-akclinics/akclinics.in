<?php

/**
 * Fetch procedure categories from campaign API.
 *
 * @return list<array{id:int|string,name:string}>
 */
if (! function_exists('fetch_procedure_categories')) {
    function fetch_procedure_categories(string $q = ''): array
    {
        try {
            $baseUrl = rtrim((string) env('api.baseURL'), '/');
            if ($baseUrl === '') {
                return [];
            }

            $client = \Config\Services::curlrequest([
                'timeout'     => 8,
                'http_errors' => false,
            ]);

            $response = $client->get($baseUrl . '/procedure-categories', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'query' => [
                    'q' => $q,
                ],
                'curl' => [
                    CURLOPT_PROXY  => '',
                    CURLOPT_NOPROXY => '*',
                ],
            ]);

            $json = json_decode($response->getBody(), true);

            if (
                ! empty($json['status'])
                && ! empty($json['data']['procedure_categories'])
                && is_array($json['data']['procedure_categories'])
            ) {
                return $json['data']['procedure_categories'];
            }
        } catch (\Throwable $e) {
            log_message('error', 'fetch_procedure_categories failed: ' . $e->getMessage());
        }

        return [];
    }
}
