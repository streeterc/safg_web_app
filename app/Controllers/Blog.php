<?php
namespace App\Controllers;
use CodeIgniter\HTTP\CURLRequest;

class Blog extends BaseController {
    protected $strapiUrl = '';
    protected $apiToken = '';

    public function __construct() {
        $this->strapiUrl = getenv('strapi.baseURL');
        $this->apiToken = getenv('strapi.apiToken');
    }

    public function index() {
        $client = \Config\Services::curlrequest();
        try {
            $response = $client->get($this->strapiUrl . '/api/blog-posts?pagination[pageSize]=10&sort=createdAt:desc&populate=*', [
                'headers' => ['Authorization' => 'Bearer ' . $this->apiToken],
                'http_errors' => false
            ]);
            $status = $response->getStatusCode();
            $body = $response->getBody();
            log_message('debug', 'Strapi API URL: ' . $this->strapiUrl . '/api/blog-posts');
            log_message('debug', 'Strapi API Status: ' . $status);
            log_message('debug', 'Strapi API Response: ' . $body);
            if ($status !== 200) {
                log_message('error', 'Strapi API failed with status: ' . $status);
                return view('blog/index', ['posts' => []]);
            }
            $data = json_decode($body, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                log_message('error', 'JSON decode error: ' . json_last_error_msg());
                return view('blog/index', ['posts' => []]);
            }
            $posts = $data['data'] ?? [];
            log_message('debug', 'Posts Array: ' . print_r($posts, true));
            return view('blog/index', ['posts' => $posts]);
        } catch (\Exception $e) {
            log_message('error', 'Strapi API exception: ' . $e->getMessage());
            return view('blog/index', ['posts' => []]);
        }
    }

    public function show($slug) {
        $client = \Config\Services::curlrequest();
        try {
            $response = $client->get($this->strapiUrl . "/api/blog-posts?filters[slug][\$eq]=$slug&populate=*", [
                'headers' => ['Authorization' => 'Bearer ' . $this->apiToken],
                'http_errors' => false
            ]);
            $status = $response->getStatusCode();
            $body = $response->getBody();
            log_message('debug', 'Strapi Show API Response: ' . $body);
            $data = json_decode($body, true);
            $post = $data['data'][0] ?? null;
            if (!$post) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
            return view('blog/show', ['post' => $post]);
        } catch (\Exception $e) {
            log_message('error', 'Strapi Show API exception: ' . $e->getMessage());
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}