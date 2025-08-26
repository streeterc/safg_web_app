<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data = [
            'products' => $model->getActiveProducts(),
        ];
        return view('Products/index', $data);
    }
}