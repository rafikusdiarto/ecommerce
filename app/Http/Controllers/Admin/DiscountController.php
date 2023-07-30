<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Discount;

class DiscountController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:admin']);
    }

    public function index(){
        return view('admin.pages.alldiscount');
    }

    public function edit(){
        return view('admin.pages.editdiscount');
    }
}
