<?php

namespace App\Http\Controllers\Admin;

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
        try {
            $this->param['getDiscount'] = Discount::all();
            return view('admin.pages.alldiscount', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function add(){
        try {
            $this->param['getProduct'] = Product::all();
            return view('admin.pages.adddiscount', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function storeDiscount(Request $request){
        $product_id = $request->select_product;
        $product_select = Product::find($product_id);
        $product_price = $product_select->price;
        $percent_discount = $request->percent_discount;
        $discount_rumus = $product_price * $percent_discount / 100;

        $request->validate([
            'select_product' => 'required',
            'percent_discount' => 'required',
            'active_period' => 'required',
        ]);
        // dd($request);
        try {
            Discount::insert([
                'product_id' => $request->select_product,
                'price_discount' => $product_price - $discount_rumus,
                'percent_discount' => $percent_discount,
                'active_period' => $request->active_period,
            ]);

            return redirect()->route('alldiscount')->with('message', 'discount successfully added');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function edit($id){
        try {
            $this->param['discountInfo'] = Discount::findOrFail($id);
            return view('admin.pages.editdiscount', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function updateDiscount(Request $request){
        $product_price = $request->price;
        $percent_discount = $request->percent_discount;
        $discount_rumus = $product_price * $percent_discount / 100;
        $discount_id = $request->discount_id;

        try {
            $request->validate([
                'percent_discount' => 'required',
                'active_period' => 'required',
            ]);

            Discount::findOrFail($discount_id)->update([
                'price_discount' => $product_price - $discount_rumus,
                'percent_discount' => $percent_discount,
                'active_period' => $request->active_period,
                'status' => $request->status,
            ]);
            return redirect()-> route('alldiscount')-> with('message', 'discount successfully update');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
