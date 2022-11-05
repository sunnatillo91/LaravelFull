<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show($adminlar) 
    {
        $adminlar += 500;
        return view('admin.adminlar', ['adminlar' => 'Sunnatillo'])
        ->with('id', $adminlar);
    }
}
