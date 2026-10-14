<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $selectedCategory = $request->query('categoria');

        $query = Product::query();

        if ($selectedCategory) {
            $query->where('category', $selectedCategory);
        }

        $products = $query->orderBy('is_featured', 'desc')
            ->orderBy('id', 'asc')
            ->get();

        $categories = Product::distinct()->pluck('category')->filter()->values();

        return view('home', [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
        ]);
    }
}
