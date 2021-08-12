<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index() {
     
        $response = Http::get('https://softwareq-merdeka-api.azure-api.net/blog/v1/ById?id=1&softwareq-apim-subscription-key=e0883b2bab8f4119b6b525027773bde5');
        $response->json();

        $x = 1;

        if ($x >= 1 ) {
            for($i=1;i<$x;$i++){
                echo($x);
            }
           dd($x);
        } else {
            $x = 0;
        }
        

        dd($detail);

    }
}
