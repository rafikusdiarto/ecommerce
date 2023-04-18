<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\IncomingMedicine;
use App\Models\Recipe;
use App\Models\Payment;

class RedirectController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $roleUser = \Auth::user()->roles()->pluck('name')[0];
        if($roleUser == 'admin'){
            return redirect('/admin/dashboard');

        } elseif($roleUser == 'user'){
            return redirect('/user');
        } else {
            return redirect('/logout');
        }

    }
}
