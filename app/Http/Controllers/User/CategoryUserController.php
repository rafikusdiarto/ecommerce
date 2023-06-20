<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CategoryUserController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }

    public function laptop(){
        try {
            $this->param ['getCategory'] = Product::where('product_category_id',  '=', 1)->get();
            $this->param['getOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->get();
            $this->param['countOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->count();
            return view('user.pages.category-laptop', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }
    public function display(){
        try {
            $this->param ['getCategory'] = Product::where('product_category_id', '=', 2)->get();
            $this->param['getOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->get();
            $this->param['countOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->count();
            return view('user.pages.category-display', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }
    public function components(){
        try {
            $this->param ['getCategory'] = Product::where('product_category_id', '=', 3)->get();
            $this->param['getOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->get();
            $this->param['countOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->count();
            return view('user.pages.category-components', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }
}
