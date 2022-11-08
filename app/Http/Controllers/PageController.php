<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main() {
        return view('main');
    }

    public function welcome()
    {
        return view('welcome', ['name' => 'Abdulloh, ',
    'records' => [1,2,3,5,6,7]
    ]);

    }
    
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
}
