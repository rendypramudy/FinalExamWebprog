<?php

namespace App\Http\Controllers;

use App\Models\buy;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    public function index($id){
        $buy_data = buy::where('id_user','=',$id)->get();
        return view('cart', compact('buy_data'));
    }

    public function buy($id_user,$id_item, Request $request){

        buy::insert([
            'id_user' => $id_user,
            'id_item' => $id_item,
        ]);
        $buy_data = buy::where('id_user','=',$id_user)->get();

        return redirect()->to('/cart'.$id_user)->with(compact('buy_data'));
    }

    public function deleteLogic($id_user,$id){
        DB::table('buys')->where('id_item','=',$id)->delete();
        $buy_data = buy::where('id_user','=',$id_user)->get();

        return view('cart',compact('buy_data'));
    }
}
