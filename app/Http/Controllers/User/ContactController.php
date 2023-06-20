<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function index(){
        $this->param['getOrder'] = Order::where([
                                    ['status', '=', 'add to cart'],
                                    ['user_id', '=', Auth::user()->id]
                                ])->get();
        $this->param['countOrder'] = Order::where([
                                    ['status', '=', 'add to cart'],
                                    ['user_id', '=', Auth::user()->id]
                                ])->count();
        return view('user.pages.contact', $this->param);
    }
}
