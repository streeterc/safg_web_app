<?php
if (!function_exists('get_recent_posts')) {
    function get_recent_posts($limit = 5) {
        $client = \Config\Services::curlrequest();
        $url = getenv('strapi.baseURL') . "/api/blog-posts?pagination[pageSize]=$limit&sort=createdAt:desc&populate=*";
        log_message('debug', 'Strapi API URL: ' . $url);
        try {
            $response = $client->get($url, [
                'headers' => ['Authorization' => 'Bearer ' . getenv('strapi.apiToken')],
                'http_errors' => false
            ]);
            $status = $response->getStatusCode();
            $body = $response->getBody();
            log_message('debug', 'Strapi API Status: ' . $status);
            log_message('debug', 'Strapi API Response: ' . $body);
            if ($status !== 200) {
                log_message('error', 'Strapi API failed with status: ' . $status);
                return [];
            }
            $data = json_decode($body, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                log_message('error', 'JSON decode error: ' . json_last_error_msg());
                return [];
            }
            return $data['data'] ?? [];
        } catch (\Exception $e) {
            log_message('error', 'Strapi API exception: ' . $e->getMessage());
            return [];
        }
    }
}
if (!function_exists('extractTextFromRichText')) {
    function extractTextFromRichText($content) {
        if (!is_array($content)) {
            return (string)$content;
        }
        $text = '';
        foreach ($content as $block) {
            if (isset($block['children'])) {
                foreach ($block['children'] as $child) {
                    if (isset($child['text'])) {
                        $text .= $child['text'] . ' ';
                    }
                }
            }
        }
        return trim($text);
    }
}