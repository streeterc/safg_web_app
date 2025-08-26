<?php

namespace App\Controllers;

use App\Models\TeamMemberModel;

class Team extends BaseController
{
    public function index()
    {
        $model = new TeamMemberModel();
        $data['members'] = $model->getActiveMembers();
        return view('team/index', $data);
    }
}