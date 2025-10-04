<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
     public function index()
    {
        $products = Product::all();
        return view('welcome')->with(['products' => $products]);
    }

     public function dashboard()
    {
        $topProducts = Product::select('products.*', DB::raw('SUM(order_product.quantity) as total_ordered'))
            ->join('order_product', 'products.id', '=', 'order_product.product_id')
            ->groupBy('products.id')
            ->orderByDesc('total_ordered')
            ->take(5)
            ->get();

        return view('dashboard', compact('topProducts'));
    }

}
