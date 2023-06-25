<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:admin']);
    }

    public function index(){
        try {

            $countUser = User::whereHas('roles', function($thisRole){
                $thisRole->where('name', 'user');
            })->count();

            $this->param ['countProduct'] = Product::count();
            $this->param ['countUser'] = $countUser;

            $this->param['getIncomeJanuary'] = Order::whereMonth('updated_at', '01')->where('status', '=', 'paid')->sum('total_price');
            $this->param['getIncomeFebruary'] = Order::whereMonth('updated_at', '02')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeMarch'] = Order::whereMonth('updated_at', '03')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeApril'] = Order::whereMonth('updated_at', '04')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeMay'] = Order::whereMonth('updated_at', '05')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeJune'] = Order::whereMonth('updated_at', '06')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeJuly'] = Order::whereMonth('updated_at', '07')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeAugust'] = Order::whereMonth('updated_at', '08')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeSeptember'] = Order::whereMonth('updated_at', '09')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeOctober'] = Order::whereMonth('updated_at', '10')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeNovember'] = Order::whereMonth('updated_at', '11')->where('status', '=','paid')->sum('total_price');
            $this->param['getIncomeDecember'] = Order::whereMonth('updated_at', '12')->where('status', '=','paid')->sum('total_price');
            $this->param['countAllIncome'] = Order::where('status', '=', 'paid')->sum('total_price');
            return view('admin.pages.dashboard', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}


