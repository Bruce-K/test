<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $user = User::find(1);
        dd($user->info);
    }

    public function create(){
        return view('order.create');
    }

    public function store(Request $request){
        return $request->input('name');
    }

}
