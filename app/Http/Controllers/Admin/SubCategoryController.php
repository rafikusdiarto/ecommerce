<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:admin']);
    }

    public function Index(){
        $allsubcategories = Subcategory::latest()->get();

        return view('admin.allsubcategory', compact('allsubcategories'));
    }

    public function AddSubCategory(){
        $categories = Category::latest()->get();
        return view('admin.addsubcategory', compact('categories'));
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:subcategories',
            'category_id' => 'required',
        ]);

        $category_id = $request->category_id;
        $category_name = Category::where('id', $category_id)->value('category_name');

        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ','-', $request->subcategory_name)),
            'category_id' => $category_id,
            'category_name' => $category_name,
        ]);

        Category::where('id', $category_id)->increment('subcategory_count', 1);
        return redirect()-> route('allsubcategory')->with('message', 'subcategory successfully added');
    }

    public function EditSubCategory($id){
        $subcatinfo = Subcategory::findOrFail($id);
        return view('admin.editsubcategory', compact('subcatinfo'));
    }

    public function UpdateSubCategory(Request $request){
        $subcatid = $request->subcatid;

        $request->validate([
          'subcategory_name' => 'required|unique:subcategories',
        ]);

        SubCategory::findOrFail($subcatid)->update([
            'subcategory_name'=>$request->subcategory_name,
            'slug'=>strtolower(str_replace(' ','-', $request->subcategory_name))
        ]);

        return redirect()-> route('allsubcategory')-> with('message', 'subcategory successfully update');

    }

    public function DeleteSubCategory($id){
        $cat_id = SubCategory::where('id', $id)->value('category_id');
        SubCategory::findOrFail($id)->delete();
        Category::findOrFail('id', $cat_id)->decrement('product_count',1);

        return redirect()-> route('allsubcategory')-> with('message', 'subcategory successfully delete');

    }
}

