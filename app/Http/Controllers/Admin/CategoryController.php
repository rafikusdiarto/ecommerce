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
        try {
            $categories = Category::latest()->get();
            // return response()->json($categories);
            return view('admin.pages.allcategory', compact('categories'));

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function AddCategory(){
        try {
            return view('admin.pages.addcategory');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function StoreCategory(Request $request){
        try {
            $request->validate([
                'category_name'=>'required|unique:categories'
            ]);

            Category::insert([
                'category_name'=> $request->category_name,
                'slug'=> strtolower(str_replace(' ','-',$request->category_name)) ,
            ]);

            return redirect()->route('allcategory')->with('message', 'Category Successfully Added !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function EditCategory($id){
        try {
            $category_info = Category::findOrFail($id);
            return view('admin.pages.editcategory',compact('category_info'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function UpdateCategory(Request $request){
        try {
            $category_id = $request->category_id;

            $request->validate([
                'category_name' => 'required|unique:categories'
            ]);

            Category::findOrFail($category_id)->update([
                'category_name'=>$request->category_name,
                'slug'=>strtolower(str_replace(' ','-', $request->category_name))
            ]);

            return redirect()-> route('allcategory')-> with('message', 'category successfully update');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function DeleteCategory($id){
        try {
            Category::findOrFail($id)->delete();
            return redirect()-> route('allcategory')-> with('message', 'category successfully delete');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
