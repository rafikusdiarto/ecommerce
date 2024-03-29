<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }
    public function index($id){
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
            $this->param['getAllOrders'] = Order::where('user_id',  Auth::user()->id)->get();
            $this->param['userDetail'] = User::findOrFail($id);

            return view('user.pages.account', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function update(Request $request, $id){
        try {
            $request->validate([
                'name' =>'required',
                'email' =>'required',
                'date_of_birth' =>'required',
                'profile_image' => 'mimes:png,jpg,jpeg'
            ]);

            $image = $request->file('profile_image');
            $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $request->profile_image->move(public_path('upload/users-profile'), $img_name);
            $img_url = 'upload/users-profile/' . $img_name;

            // dd($img_url);

            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'image' => $img_url
            ]);

            return redirect()->back()->with('success', 'profile successfully update');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}

