<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        try {
            $this->param['getOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->get();
            $this->param['countOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->count();
            $this->param['countPrice'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->sum('total_price');
            return view('user.pages.cart', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function checkoutOrder(Request $request)
    {
        try {
            $selectedItems = $request->input('selected_items');
            $allOrder = Order::where('status', 'add to cart')->get();

            if ($selectedItems) {
                foreach ($selectedItems as $selectedItem) {
                    $item = Order::find($selectedItem);
                    if ($item) {
                        // dd($item->product->product_name);
                        $item->status = 'not paid';
                        $item->update();                    }
                }
            } else {
                foreach ($allOrder as $data){
                    $data->status = 'not paid';
                    $data->update();
                }
            }


            return redirect()->back()->with('success', 'Product successfully checkout from cart !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
