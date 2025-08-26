<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    public function termsConditions()
    {
        return view('terms_conditions');
    }

    public function accessibilityPolicy()
    {
        return view('accessibility_policy');
    }
}