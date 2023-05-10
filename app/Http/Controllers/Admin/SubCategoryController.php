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
        try {
            $allsubcategories = Subcategory::latest()->get();
            return view('admin.pages.allsubcategory', compact('allsubcategories'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function AddSubCategory(){
        try {
            $categories = Category::latest()->get();
            return view('admin.pages.addsubcategory', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function StoreSubCategory(Request $request){
        try {
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
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function EditSubCategory($id){
        try {
            $subcatinfo = Subcategory::findOrFail($id);
            return view('admin.pages.editsubcategory', compact('subcatinfo'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function UpdateSubCategory(Request $request){
        try {
            $subcatid = $request->subcatid;
            $request->validate([
              'subcategory_name' => 'required|unique:subcategories',
            ]);

            SubCategory::findOrFail($subcatid)->update([
                'subcategory_name'=>$request->subcategory_name,
                'slug'=>strtolower(str_replace(' ','-', $request->subcategory_name))
            ]);
            return redirect()-> route('allsubcategory')-> with('message', 'subcategory successfully update');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function DeleteSubCategory($id){
        try {
            $cat_id = SubCategory::where('id', $id)->value('category_id');
            SubCategory::findOrFail($id)->delete();
            Category::findOrFail('id', $cat_id)->decrement('product_count',1);

            return redirect()-> route('allsubcategory')-> with('message', 'subcategory successfully delete');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}

