<?php

namespace App\Http\Controllers\Admin;

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
        $checkouts = Checkout::with('Camps')->get();

        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
