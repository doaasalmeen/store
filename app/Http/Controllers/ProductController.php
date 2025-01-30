<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch product data from an API (example using a fake API URL)
        $response = Http::get('https://fakestoreapi.com/products');
        $products = $response->json();

        return view('welcome', compact('products'));
    }
}