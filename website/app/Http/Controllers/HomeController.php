<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\CPU;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
//        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $kind = User::find($user_id)->Role;
        if ($kind == 'Salesperson') {
            return redirect('/dashboard');
        }
        return redirect('/');
    }

}
