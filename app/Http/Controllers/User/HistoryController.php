<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }
    public function index(){
        try {
            $this->param['getHistoryOrder'] = Order::where([
                                            ['user_id', '=', Auth::user()->id],
                                            ['status', '=', 'not paid'],
                                        ]
                                        )->orWhere([
                                            ['user_id', '=', Auth::user()->id],
                                            ['status','=','paid'],
                                            ])->orderBy('updated_at', 'desc')->get();
            $this->param['countHistoryOrder'] = Order::where(
                                            'user_id', '=', Auth::user()->id
                                        )->count();
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

            return view('user.pages.history', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function historyNew(Request $request){
        $data = Order::select('orders.*', 'products.product_name', 'products.price', 'products.product_category_name', 'products.product_short_des', 'products.product_img')
                        ->join('products', 'orders.product_id', 'products.id')
                        ->where('orders.id', $request->id)
                        ->first();
        return response()->json($data);
    }

    public function filter(Request $request)
    {
        $filter = $request->get('filter');
        try {
            if ($filter == 'new') {
                $produk = \DB::table('orders')
                ->select('products.product_name', 'orders.product_id')
                ->join('products', 'orders.product_id', 'products.id')
                ->where([
                    ['user_id', '=', Auth::user()->id],
                    ['status', '=', 'not paid'],
                ]
                )->orWhere([
                    ['user_id', '=', Auth::user()->id],
                    ['status','=','paid'],
                    ])
                ->orderBy('updated_at', 'desc')
                ->get();

                // $produk = Order::where([
                //     ['user_id', '=', Auth::user()->id],
                //     ['status', '=', 'not paid'],
                // ]
                // )->orWhere([
                //     ['user_id', '=', Auth::user()->id],
                //     ['status','=','paid'],
                //     ])->orderBy('updated_at', 'desc')->get();
            } elseif ($filter == 'old') {
                $produk = \DB::table('orders')
                ->select('products.product_name', 'orders.product_id')
                ->join('products', 'orders.product_id', 'products.id')
                ->where([
                    ['user_id', '=', Auth::user()->id],
                    ['status', '=', 'not paid'],
                ]
                )->orWhere([
                    ['user_id', '=', Auth::user()->id],
                    ['status','=','paid'],
                    ])
                ->orderBy('updated_at', 'asc')
                ->get();

                // $produk = Order::where([
                //     ['user_id', '=', Auth::user()->id],
                //     ['status', '=', 'not paid'],
                // ]
                // )->orWhere([
                //     ['user_id', '=', Auth::user()->id],
                //     ['status','=','paid'],
                //     ])->orderBy('updated_at', 'asc')->get();
            } else {
                $produk = Order::where([
                    ['user_id', '=', Auth::user()->id],
                    ['status', '=', 'not paid'],
                ]
                )->orWhere([
                    ['user_id', '=', Auth::user()->id],
                    ['status','=','paid'],
                    ])->get();
            }

            return response()->json($produk);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

}

