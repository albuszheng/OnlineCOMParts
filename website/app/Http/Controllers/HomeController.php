<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CPU;

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
        $cpu = new CPU();
        return view('home', ['cpu' => $cpu->getCPUByManufacturer(['AMD'])]);
    }

    public function test()
    {
        return view('products.product_list');
    }
}
