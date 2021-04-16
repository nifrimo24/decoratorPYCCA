<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Environment;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //GET all environments
    public function environments()
    {
        $environments = Environment::all();

        return response()->json($environments);
    }

    //GET an especific environment
    public function environment(Environment $environment)
    {
        $products = Environment::where('id_environment', $environment->id_environment)->get();

        return response()->json($environment);
    }

    //GET all product categories
    public function categories()
    {
        $categories = ProductCategory::all();

        return response()->json($categories);
    }

    //GET an especific environment
    public function category(ProductCategory $category)
    {
        $products = Product::where('product_category_id', $category->id_product_category)->with('categories')->get();

        return response()->json($products);
    }
}
