<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    
    public function index() {

        $a = 1;
        $detail = [];
        $key = 'e0883b2bab8f4119b6b525027773bde5';

        do {

            $response = Http::get('https://softwareq-merdeka-api.azure-api.net/blog/v1/ById?id='.$a.'&softwareq-apim-subscription-key='.$key);

            if($response->json() != null) {
                
                // $detail->push($response->json());
                array_push($detail, $response->json());

                $a++;
            } else {
                break;
            }
            
        } while ($a >= 1);


        return view('blog.blog', ['detail' => $detail, 'key' => $key]);

    }

    public function blogPost($id) {
        
        $key = 'e0883b2bab8f4119b6b525027773bde5';
        $response = Http::get('https://softwareq-merdeka-api.azure-api.net/blog/v1/ById?id='.$id.'&softwareq-apim-subscription-key='.$key);

        $detail = $response->json();

        return view('blog.blog-post', ['detail' => $detail]);

    }
}
