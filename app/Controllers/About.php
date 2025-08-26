<?php

namespace App\Controllers;

use App\Models\TeamMemberModel;

class About extends BaseController
{
    public function index()
    {
        $model = new TeamMemberModel();
        $data = [
            'members' => $model->getActiveMembers(), // Fetches only active team members
            // Add other data for your About page if needed, e.g.:
            // 'title' => 'About Us',
            // 'content' => 'Welcome to our company!',
        ];
        return view('About/index', $data);
    }
}