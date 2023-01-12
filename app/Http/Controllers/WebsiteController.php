<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebsiteController extends Controller
{
    public function checkStatus(Request $request)
    {
        try {
            $response = Http::get($request->url);
            $status = $response->status();
            Website::create([
                'url' => $request->url,
                'status' => $status
            ]);
            return view('website', ['status' => $status]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
