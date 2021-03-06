<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // $user->notify(new InvoicePaid());
        return view('home');
    }
}
