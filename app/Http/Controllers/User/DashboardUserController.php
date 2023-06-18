<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class DashboardUserController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }


    public function index(){
        try {
            $this->param['getProduct'] = Product::all();
            $this->param['getCategory'] = Category::all();

            return view('user.pages.dashboard', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function addToCart(Request $request){
        $product_price = $request->price;
        $total_quantity = $request->quantity;
        $total_price = $product_price * $total_quantity;
        try {
            Order::insert([
                'product_id' => $request->product_id,
                'user_id' => Auth::id(),
                'total_quantity' => $total_quantity,
                'total_price' => $total_price,
                'status' => 'not paid',
            ]);

            return redirect()->back()->with('message', 'Product successfully added to cart !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}


