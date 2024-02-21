<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $listofData = array(
            'name' => 'Good Taste',
            'location' => 'Baguio',
            'availability' => 'Mondays to Sunday 24/4'
        );
        return view('restaurants' , ['restaurants' => $listofData]);
    }
}
