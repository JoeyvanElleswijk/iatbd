<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{

    public function index(){
        return view('product.index',[
            'product' => \App\Models\Product::all()->where('uitlenen', 1),
        ]);
    }

    public function show($id){
        return view('product.show',[
            'product' => \App\Models\Product::find($id),
            'users' => \App\Models\User::all(),
            'reviews' => \App\Models\Review::all(),
        ]); 
    }

    public function showLeand($id){
        return view('profile.showLeand',[
            'product' => \App\Models\Product::find($id),
            'users' => \App\Models\User::all(),
        ]); 
    }

    public function uitgeleend($id, \App\Models\Product $product){
        try {
            $product::where('id', $id)->update(array(
                'uitlenen' => false,
                'uitlener' => Auth::user()->name),
            );
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product');
        }
    }

    public function voltooid($id, \App\Models\Product $product){
        try {
            $product::where('id', $id)->update(array(
                'uitlenen' => true,
                'voltooid' => true,
                'uitlener' => " "),
            );
            return redirect('/review');
        } catch (Exception $e) {
            return redirect('/product');
        }
    }    

    public function userproduct(){
        $uid = Auth::id();
        return view('users.index',[
            'product' => \App\Models\Product::where('userid', $uid)->get(),
            'users' => \App\Models\User::all(),
        ]);   
    }

    public function usershow($userid){
        return view('profile.useroverzicht',[
            'users' => \App\Models\User::where('id', $userid)->get(),
            'product' => \App\Models\Product::where('id', $userid)->get(),
        ]);   
    }

    public function create(){
        return view('product.create', [
            'kind_of_product' => \App\Models\KindOfProduct::all()
        ]);
    }

    public function users(){
        return view('admin.users',[
            'users' => \App\Models\User::all()
        ]);
    }

    public function block(Request $request, \App\Models\Users $user){
        return view('admin.components.admin--index',[
            'users' => \App\Models\User::find($id),
        ]);
    }

    public function store(Request $request, \App\Models\Product $product){ 
        $product->userid = Auth::id();
        $product->image= $request->input('image');
        $product->name = $request->input('name');
        $product->kind= $request->input('kind');
        $product->description= $request->input('description');
        $product->deadline= $request->input('dagen');
        $product->eigenaar = Auth::user()->name;
        
        try{
            $product->save();
            return redirect('/');
        }
        catch(Exception $e){
        return redirect('/product/create');
        }
    }
}
