<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
        $this->param['getOrder'] = Order::where('status', '=', 'add to cart')->get();

        return view('user.pages.cart', $this->param);
    }
}
