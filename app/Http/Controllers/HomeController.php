<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $productQuery = Product::with(['type', 'sizes']);

        $mainProducts = $productQuery->paginate(3)->withQueryString();
        
        return view('home', [
            'products' => $mainProducts,
        ]);
    }

    public function products(){
        return view('products');
    }

    public function blog(){
        return view('blog');
    }

    public function closeSession(){
        return view('closeSession');
    }
}
