<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shoppingCart() {
        $total = Transaction::shoppingCart();
        return view('product/all', compact($total));
    }

    public function makeOrder($kind) {
        $res = Transaction::newOrder($kind);
        return view('product/all', compact($res));
    }

    public function purchase($data) {
        $res = Transaction::newTransaction($data);
        return view('transaction/success', compact($res));
    }

    public function record($id) {
        $res = Transaction::find($id);
        return view('transaction/detail', compact($res));
    }
}
