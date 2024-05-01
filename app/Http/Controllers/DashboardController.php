<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class DashboardController extends Controller
{
    public function index(Request $request, ProductRepository $productRepository)
    {
        $products = $productRepository->getAllProducts($request->all());

        return view('dashboard', compact('products'));
    }
}
