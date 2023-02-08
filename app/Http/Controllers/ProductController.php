<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = product::all();
        return view ('sucess', compact('product'));

    }

    public function detail($id){
        $data = product::where('id','=',$id)->first();
        return view('detail', compact('data'));
    }


}
