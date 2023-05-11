<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryUserController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }

    public function laptop(){
        try {
            $this->param ['getCategory'] = Product::all();
            return view('user.pages.category-laptop', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }
    public function display(){
        try {
            $this->param ['getCategory'] = Product::all();
            return view('user.pages.category-display', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }
    public function components(){
        try {
            $this->param ['getCategory'] = Product::all();
            return view('user.pages.category-components', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }
}
