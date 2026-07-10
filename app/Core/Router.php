<?php

namespace App\Core;

class Router
{

    public function run()
    {

        $url=$_GET['url'] ?? 'dashboard';

        echo $url;

    }

}