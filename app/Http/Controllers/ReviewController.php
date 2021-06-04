<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function loadReview() {
        $user = Auth::user()->name;
        return view('profile.review', [
            'gebruikers' => \App\Models\User::all()->where('User', '!=', $user),
        ]);
    }

    public function uploadReview(Request $request, \App\Models\Review $review) {
        $review->Gericht_aan = $request->input('gebruiker');
        $review->Beschrijving = $request->input('description');
        $review->Geschreven_door = Auth::user()->name;
        $review->owner = Auth::user()->id;
        $review->timestamps = false;

        try {
            $review->save();
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product');
        }
    }


}
