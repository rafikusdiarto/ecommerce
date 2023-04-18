<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:admin']);
    }

    public function Index(){
        $categories = Category::latest()->get();
        // return response()->json($categories);
        return view('admin.allcategory', compact('categories'));
    }

    public function AddCategory(){
        return view('admin.addcategory');
    }

    public function StoreCategory(Request $request){
        $request->validate([
            'category_name'=>'required|unique:categories'
        ]);

        Category::insert([
            'category_name'=> $request->category_name,
            'slug'=> strtolower(str_replace(' ','-',$request->category_name)) ,
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Successfully Added !');
    }

    public function EditCategory($id){
        $category_info = Category::findOrFail($id);
        return view('admin.editcategory',compact('category_info'));
    }

    public function UpdateCategory(Request $request){
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::findOrFail($category_id)->update([
            'category_name'=>$request->category_name,
            'slug'=>strtolower(str_replace(' ','-', $request->category_name))
        ]);

        return redirect()-> route('allcategory')-> with('message', 'category successfully update');
    }

    public function DeleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()-> route('allcategory')-> with('message', 'category successfully delete');
    }
}
