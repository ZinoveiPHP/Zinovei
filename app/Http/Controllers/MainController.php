<?php

namespace App\Http\Controllers;

use App\Models\filters;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $filters = filters::all();
        return view('home' , compact('filters'));
    }

    public function search(Request $request){
        $s = $request->search;
        dd($s);
    }
}
