<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:admin']);
    }

    public function Index(){
        try {
            $products = Product::latest()->get();
            return view('admin.pages.allproduct', compact('products'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function AddProduct(){
        try {
            $categories = Category::latest()->get();
            $subcategories = Subcategory::latest()->get();
            return view('admin.pages.addproduct', compact('categories', 'subcategories'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function StoreProduct(Request $request){
        try {
            $request->validate([
                'product_name' => 'required|unique:products',
                'price' => 'required',
                'quantity' => 'required',
                'product_short_des' => 'required',
                'product_long_des' => 'required',
                'product_category_id' => 'required',
                'product_subcategory_id' => 'required',
                'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = $request->file('product_img');
            $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $request->product_img->move(public_path('upload'), $img_name);
            $img_url = 'upload/' . $img_name;

            $category_id = $request->product_category_id;
            $subcategory_id = $request->product_subcategory_id;

            $category_name = Category::where('id', $category_id)->value('category_name');
            $subcategory_name = SubCategory::where('id', $subcategory_id)->value('subcategory_name');

            Product::insert([
                'product_name' => $request->product_name,
                'product_short_des' => $request->product_short_des,
                'product_long_des' => $request->product_long_des,
                'price' => $request->price,
                'product_category_name' => $category_name,
                'product_subcategory_name' => $subcategory_name,
                'product_category_id' => $request->product_category_id,
                'product_subcategory_id' => $request-> product_subcategory_id,
                'product_img' => $img_url,
                'quantity' =>  $request->quantity,
                'slug'=> strtolower(str_replace(' ','-', $request->product_name)),
            ]);

            Category::where('id', $category_id)->increment('product_count',1);
            SubCategory::where('id', $subcategory_id)->increment('product_count',1);

            return redirect()->route('allproduct')->with('message', 'new product successfully added');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }

    public function EditProductImg($id){
        try {
            $product_info = Product::findOrFail($id);
            return view('admin.pages.editproductimg', compact('product_info'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function UpdateProductImg(Request $request){
        try {
            $request->validate([
                'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $id = $request->id;
            $image = $request->file('product_img');
            $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $request->product_img->move(public_path('upload'), $img_name);
            $img_url = 'upload/' . $img_name;

            Product::findOrFail($id)->update([
                'product_img' => $img_url
            ]);

            return redirect()->route('allproduct')->with('message', 'product image successfully update');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }

    public function EditProduct($id){
        try {
            $product_info = Product::findOrFail($id);
            return view('admin.pages.editproduct', compact('product_info'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function UpdateProduct(Request $request){
        try {
            $product_id = $request->id;
            $request->validate([
                'product_name' => 'required|unique:products',
                'price' => 'required',
                'quantity' => 'required',
                'product_short_des' => 'required',
                'product_long_des' => 'required',
            ]);

            Product::findOrFail($product_id)->update([
                'product_name' => $request->product_name,
                'product_short_des' => $request->product_short_des,
                'product_long_des' => $request->product_long_des,
                'price' => $request->price,
                'quantity' =>  $request->quantity,
                'slug'=> strtolower(str_replace(' ','-', $request->product_name)),
            ]);

            return redirect()->route('allproduct')->with('message', 'product successfully update');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }

    public function DeleteProduct($id){
        try {
            $category_id = Product::where('id', $id)->value('product_category_id');
            $subcategory_id = Product::where('id', $id)->value('product_subcategory_id');
            Product::findOrFail($id)->delete();
            Category::findOrFail('id', $category_id)->decrement('product_count',1);
            SubCategory::findOrFail('id', $subcategory_id)->decrement('product_count', 1);

            return redirect()->route('allproduct')->with('message', 'pruduct successfully delete');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
