<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $this->param['getOrder'] = Order::where('status', '=', 'add to cart')->get();

        return view('user.pages.contact', $this->param);
    }
}
