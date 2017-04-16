<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function transactionHistory($Id)
    {
        $res = Transaction::findCustomer($Id);
        return view("customer/history", compact($res));
    }
}
