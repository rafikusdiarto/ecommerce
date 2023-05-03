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
        $products = Product::latest()->get();
        return view('admin.allproduct', compact('products'));
    }

    public function AddProduct(){
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('admin.addproduct', compact('categories', 'subcategories'));
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
        $product_info = Product::findOrFail($id);
        return view('admin.editproductimg', compact('product_info'));
    }

    public function UpdateProductImg(Request $request){
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

    }

    public function EditProduct($id){
        $product_info = Product::findOrFail($id);
        return view('admin.editproduct', compact('product_info'));
    }

    public function UpdateProduct(Request $request){
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

    }

    public function DeleteProduct($id){
        $category_id = Product::where('id', $id)->value('product_category_id');
        $subcategory_id = Product::where('id', $id)->value('product_subcategory_id');
        Product::findOrFail($id)->delete();
        Category::findOrFail('id', $category_id)->decrement('product_count',1);
        SubCategory::findOrFail('id', $subcategory_id)->decrement('product_count', 1);

        return redirect()->route('allproduct')->with('message', 'pruduct successfully delete');
    }



}
