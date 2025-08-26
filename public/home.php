<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class MyPage extends Controller
{
    public function index()
    {
        // Your existing PHP logic goes here
        return view('mypage'); // Loads the view file
    }
}