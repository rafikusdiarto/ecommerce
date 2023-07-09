<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SingleProductController extends Controller
{
    public function index($id){
        try {
            $this->param['getSingleProduct'] = Product::find($id);

            $this->param['countHistoryOrder'] = Order::where('user_id', '=', Auth::user()->id
                                            )->count();
            $this->param['getOrder'] = Order::where([
                            ['status', '=', 'add to cart'],
                            ['user_id', '=', Auth::user()->id]
                        ])->get();
            $this->param['countOrder'] = Order::where([
                            ['status', '=', 'add to cart'],
                            ['user_id', '=', Auth::user()->id]
                        ])->count();
            $this->param['countPrice'] = Order::where([
                            ['status', '=', 'add to cart'],
                            ['user_id', '=', Auth::user()->id]
                        ])->sum('total_price');
            return view('user.pages.single-product', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

}
