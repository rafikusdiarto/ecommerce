<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use function Pest\Laravel\json;

class ProductApiController extends Controller
{
    public function Index(){
        $products = Product::latest()->get();
        return response()->json($products);
    }

    public function SingleProduct($id){
        $product_info = Product::findOrFail($id);
        return response() -> json($product_info);
    }

    public function Laptop()
    {
        $products = DB::table('products')
            ->where('product_category_id', '=', 1)
            ->get();
        return response() -> json($products);
    }

    public function Display()
    {
        $products = DB::table('products')
            ->where('product_category_id', '=', 2)
            ->get();
        return response() -> json($products);
    }

    public function Components()
    {
        $products = DB::table('products')
            ->where('product_category_id', '=', 3)
            ->get();
        return response() -> json($products);
    }
}
