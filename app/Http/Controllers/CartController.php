<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index($id){
        $buy_data = cart::where('id_user','=',$id)->get();
        return view('cart', compact('buy_data'));
    }

    public function buy($id_user,$id_item, Request $request){

        cart::insert([
            'id_user' => $id_user,
            'id_item' => $id_item,
        ]);
        $buy_data = cart::where('id_user','=',$id_user)->get();

        return redirect()->to('/cart'.$id_user)->with(compact('buy_data'));
    }

    public function deleteLogic($id_user,$id){
        DB::table('buys')->where('id_item','=',$id)->delete();
        $buy_data = cart::where('id_user','=',$id_user)->get();

        return view('cart',compact('buy_data'));
    }
}
