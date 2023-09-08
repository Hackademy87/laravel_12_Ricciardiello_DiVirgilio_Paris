<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        $products = Product::all();
        return view('admin.dashboard',compact('products','users'));
    }
}
