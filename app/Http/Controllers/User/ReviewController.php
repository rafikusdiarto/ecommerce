<?php

namespace App\Http\Controllers\User;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:user']);
    }

    public function create(Request $request){
        try {
            Review::insert([
                'user_id' => Auth::user()->id,
                'product_id' =>$request->product_id,
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
