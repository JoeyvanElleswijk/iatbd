<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function myProducts() {
        return view('users.useroverzicht',[
            'name' => $user = Auth::user()->name,
            'user' => \App\Models\User::all(),
            'products' => \App\Models\Product::all()->where('eigenaar', $user),
        ]);
    }

    public function myLeand() {
        return view('profile.leandproducts',[
            'name' => $user = Auth::user()->name,
            'user' => \App\Models\User::all(),
            'products' => \App\Models\Product::all()->where('uitlener', $user),
        ]);
    }

}
