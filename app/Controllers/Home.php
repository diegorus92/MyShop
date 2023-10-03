<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct(){
        helper("url");
    }

    public function index():string
    {
        $data['title'] = 'Welcome!';
        $data['nameBussines'] = "My Shop";

        return view('frontend/header', $data).
                view('frontend/menu', $data).
                view('frontend/principal').
                view('frontend/footer');
    }

    public function products():string
    {
        $data['title'] = 'Products';
        $data['nameBussines'] = "My Shop";

        return view('frontend/header', $data).
                view('frontend/menu', $data).
                view('frontend/products').
                view('frontend/footer');
    }
}
