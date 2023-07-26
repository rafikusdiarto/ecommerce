<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SingleProductController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }

    public function index($id){
        try {
            $product = Product::find($id);
            $this->param['getReview'] = $product->reviews;
            $this->param['countReview'] = $product->reviews->count();
            $this->param['getSingleProduct'] = Product::find($id);

            $this->param['countHistoryOrder'] = Order::where('user_id', '=', Auth::user()->id
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
            return view('user.pages.single-product', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function createReview(Request $request, $id){
        try {
            Review::insert([
                'user_id' => Auth::user()->id,
                'product_id' =>$id,
                'review_description' => $request->review_description,
            ]);
            return redirect()->back()->with('success', 'Review successfully added !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

}
