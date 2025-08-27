<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController {
    public function index() {
        helper('strapi'); // Load helper
        $posts = get_recent_posts(3); // Fetch posts
        log_message('debug', 'Home Posts fetched: ' . print_r($posts, true)); // Log for debugging
        return view('Home/index', ['posts' => $posts ?: []]); // Ensure array is passed
    }
}