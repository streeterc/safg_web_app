<?php

namespace Config;

class SocialMedia
{
    public static $platforms = [
        'linkedin' => [
            'icon' => 'bi bi-linkedin',
            'base_url' => 'https://linkedin.com/in/',
        ],
        'twitter' => [
            'icon' => 'bi bi-twitter-x',
            'base_url' => 'https://x.com/',
        ],
        'facebook' => [
            'icon' => 'bi bi-facebook',
            'base_url' => 'https://facebook.com/',
        ],
        'instagram' => [
            'icon' => 'bi bi-instagram',
            'base_url' => 'https://instagram.com/',
        ],
        'youtube' => [
            'icon' => 'bi bi-youtube',
            'base_url' => 'https://youtube.com/',
        ],
        'homepage' => [
            'icon' => 'bi bi-house-fill',
            'base_url' => 'https://',
        ],
        'amazon' => [
            'icon' => 'bi bi-amazon',
            'base_url' => 'https://amazon.ca',
        ]
        // Add more platforms as needed
    ];
}