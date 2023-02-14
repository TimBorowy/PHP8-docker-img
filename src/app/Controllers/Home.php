<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        //var_dump($db);

        return view('welcome_message');
    }
}
