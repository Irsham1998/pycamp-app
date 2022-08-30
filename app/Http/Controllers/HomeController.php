<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        // ambil data di checkout
        // $checkouts = Checkout::with('Camps')->whereUserId(Auth::id())->get();
        $checkouts = Checkout::with('Camps')->where('user_id', Auth::id())->get();

        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
