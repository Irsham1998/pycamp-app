<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ambil data di checkout
        // $checkouts = Checkout::with('Camps')->whereUserId(Auth::id())->get();
        $checkouts = Checkout::with('Camps')->where('user_id', Auth::id())->get();

        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
