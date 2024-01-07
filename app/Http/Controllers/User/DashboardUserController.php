<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardUserController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }


    public function index(){
        try {
            $this->param['getProduct'] = Product::all();
            $this->param['getCategory'] = Category::all();
            $this->param['getProductDiscount'] = Discount::all();
            $this->param['getOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->get();
            $this->param['countOrder'] = Order::where([
                                            ['status', '=', 'add to cart'],
                                            ['user_id', '=', Auth::user()->id]
                                        ])->count();
            // $eventStartDate = Discount::first()->active_period;
            // $currentTime = Carbon::now();
            // $this->param['countdown'] = $currentTime->diff($eventStartDate)->format('%d days %h hours %i minutes %s seconds');

            return view('user.pages.dashboard', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }


    public function addToCart(Request $request, $id){
        try {
            $product = Product::find($id);

            if($product->quantity < $request->jumlah_order){
                return redirect()->back()->with('failed', 'Failed order product !');
            }elseif ($request->jumlah_order < 1) {
                return redirect()->back()->with('failed', 'Failed order product !');
            }

            $product_price = $product->price;
            $jumlah_order = $request->jumlah_order;
            $total_price = $product_price * $jumlah_order;
            $jumlah_cart_item = $jumlah_order + $product->quantity;

            $order = Order::where('product_id', $id)
                    ->where('status', 'add to cart')
                    ->where('user_id', Auth::user()->id)
                    ->first();;
            if ($order) {
                if ($jumlah_order <= $product->quantity) {
                    $jumlahDiKeranjang = $order->total_quantity;
                    // dd($jumlahDiKeranjang);
                    $totalJumlahPesanan = $request->jumlah_order + $jumlahDiKeranjang;
                    if ($totalJumlahPesanan <= $product->quantity ) {
                        $order->total_quantity += $jumlah_order;
                        $order->total_price += $total_price;
                        $order->save();
                    }else {
                        return redirect()->back()->with('failed', 'Failed order product !');
                    }
                } else {
                    return redirect()->back()->with('failed', 'Failed order product !');
                }
            } else {
                if ($jumlah_order <= $product->quantity) {
                    Order::create([
                    'product_id' =>$id,
                    'user_id' => Auth::user()->id,
                    'total_quantity' => $jumlah_order,
                    'total_price' => $total_price,
                    'status' => 'add to cart',
                    ]);
                } else {
                    return redirect()->back()->with('failed', 'Failed order product !');
                }
            }
            return redirect()->back()->with('success', 'Product successfully dsa    added to cart !');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function removeCart($id){
        try {
            Order::findOrFail($id)->delete();
            return redirect()->back()->with('successDelete', 'Product successfully delete from cart !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function updateCart(Request $request, $id){
        try {
            $order = Order::find($id);
            $product = $order->product->quantity;
            $total_price = $order->product->price * $request->total_quantity;

            if ($request->total_quantity <= $product) {
                Order::find($id)->update([
                    'total_quantity' => $request->total_quantity,
                    'total_price' => $total_price
                ]);
            }else {
                return redirect()->back()->with('failed', 'Failed order product !');
            }
            return redirect()->back()->with('success', 'Product quantity successfully update from cart !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}


