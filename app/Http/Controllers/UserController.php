<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // return response("Bu userlarni ro'yxati", 201);
        return response()->json([
            'name' => 'Abcd',
            'state' => 'JA',
        ]);
    }

    public function show($user)
    {
        // dd($request->ip());

        $user += 1000;
        // return "Tanlangan user: ". $user;
        // return view('users.show')->with(['name' => 'Sunnatillo', 'id' => $user]);
        return view('users.show')
        ->with('name', 'Sunnatillo')
        ->with('id', $user);

    }

    public function create() {
        return view('users.create');
    }

    public function edit($user_id) {
        return $user_id . 'ni o\'zgartirish';
    }

    public function store(Request $request) {
        dd($request->name);
        // return response()->download($pathToFile);
        // if($request->has('name')) {
        //     echo 'OK';
        // } else {
        //     echo 'NO';
        // }
    }
}
