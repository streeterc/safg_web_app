<?php

namespace App\Controllers;

use App\Models\PartnerModel;

class Partners extends BaseController
{
    public function index()
    {
        $model = new PartnerModel();
        $data = [
            'partners' => $model->getActivePartners(),
        ];
        return view('Partners/index', $data);
    }
}