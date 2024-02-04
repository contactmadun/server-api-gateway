<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{

    //untuk menambahkan data di server marketing
    public function insertProduct(Request $request){
        $formData = $request->all();
        try {
            $response = Http::post(config('services.server_marketing.url') . '/api/posts', $formData);
            return response($response->body(), $response->status());
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }    

    // untuk mengambil data di server marketing
    public function postProduct(Request $request){
        $response = Http::get(config('services.server_marketing.url') . '/api/posts', $request->all());
        return response($response->body(), $response->status());
    }

    //untuk mengambil data di server sales
    public function sales(Request $request){
        $response = Http::get(config('services.server_sales.url') . '/api/posts', $request->all());
        return response($response->body(), $response->status());
    }
}
