<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $this->param['getOrder'] = Order::where([
                                    ['status', '=', 'add to cart'],
                                    ['user_id', '=', Auth::user()->id]
                                ])->get();

        return view('user.pages.cart', $this->param);
    }
}
