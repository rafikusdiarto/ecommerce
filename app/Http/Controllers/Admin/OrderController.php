<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function Index(){
        $this->param['getOrder'] = Order::where([
                                    ['status', '=', 'not paid'],
                                    ])->get();
        $this->param['getOrderAcc'] = Order::where([
                                    ['status', '=', 'paid'],
                                    ])->get();
        $this->param['countOrder'] = Order::where([
                                    ['status', '=', 'not paid'],
                                    ])->count();
        $this->param['countPrice'] = Order::where([
                                    ['status', '=', 'not paid'],
                                    ])->sum('total_price');

        return view('admin.pages.pendingorder', $this->param);
    }

    public function accOrder(Request $request, $id)
    {
        try {
            Order::find($id)->where('id',$id)->update([
                'status' => 'paid',
            ]);
            return redirect()->back()->with('success', 'Order successfully accept !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function rejectOrder(Request $request, $id)
    {
        try {
            Order::find($id)->where('id',$id)->update([
                'status' => 'not paid',
            ]);
            return redirect()->back()->with('failed', 'Order not accept !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

}
