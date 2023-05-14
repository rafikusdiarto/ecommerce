<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
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
        $quantity = $request->quantity;
        $price = $product_price * $quantity;
        try {
            // $this->param = Cart::insert([
            //                     'product_id' => $request->id,
            //                     'user_id' => Auth::id(),
            //                     'quantity' => $request->quantity,
            //                     'price' => $price
            //                 ]);
            Cart::insert([
                'product_id' => $request->product_id,
                'user_id' => Auth::id(),
                'quantity' => $request->quantity,
                'price' => $price
            ]);

            // return view('user.pages.cart', $this->param)->with('message', 'Your item successfully added to cart !');
            return redirect()->route('mycart')->with('message', 'Your item successfully added to cart !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}


