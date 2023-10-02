<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct(){
        helper("url");
    }

    public function index():string
    {
        return view('frontend/header').
                view('frontend/footer');
    }
}
