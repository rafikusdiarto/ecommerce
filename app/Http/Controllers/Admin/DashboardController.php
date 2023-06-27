<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;

use App\Models\Category;
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

            $this->param['getSellingJanuary'] = Order::whereMonth('updated_at', '01')->where('status', '=', 'paid')->sum('total_quantity');
            $this->param['getSellingFebruary'] = Order::whereMonth('updated_at', '02')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingMarch'] = Order::whereMonth('updated_at', '03')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingApril'] = Order::whereMonth('updated_at', '04')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingMay'] = Order::whereMonth('updated_at', '05')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingJune'] = Order::whereMonth('updated_at', '06')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingJuly'] = Order::whereMonth('updated_at', '07')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingAugust'] = Order::whereMonth('updated_at', '08')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingSeptember'] = Order::whereMonth('updated_at', '09')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingOctober'] = Order::whereMonth('updated_at', '10')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingNovember'] = Order::whereMonth('updated_at', '11')->where('status', '=','paid')->sum('total_quantity');
            $this->param['getSellingDecember'] = Order::whereMonth('updated_at', '12')->where('status', '=','paid')->sum('total_quantity');

            $this->param['getOrderLaptops'] = Order::whereHas('product', function($query){
                $query->where('product_category_id', 1);
            })->count();
            $this->param['getOrderDisplays'] = Order::whereHas('product', function($query){
                $query->where('product_category_id', 2);
            })->count();
            $this->param['getOrderComponents'] = Order::whereHas('product', function($query){
                $query->where('product_category_id', 3  );
            })->count();

            $this->param['countAllIncome'] = Order::where('status', '=', 'paid')->sum('total_price');
            $this->param['countAllProductSold'] = Order::where('status', '=', 'paid')->sum('total_quantity');
            $this->param['countOrders'] = Order::count();
            $this->param['countAccOrders'] = Order::where('status', 'paid')->count();
            $this->param['countRejectOrders'] = Order::where('status', 'reject')->count();
            $this->param['getPendingOrders'] = Order::where('status', '=', 'not paid')->count();

            return view('admin.pages.dashboard', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}


