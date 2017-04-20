<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Inventory;
use App\Product;
use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $customer =Customer::find(Auth::id());
        return view('user.order_list', ['customer' => $customer]);
    }

    public function create($productID) {
        return view('payment.make_order', ['product' => Product::find($productID), 'customer' => Customer::find(Auth::id())]);
    }

    public function store() {
        $transaction = new Transaction;

        $transaction->CustomerID = Auth::id();
        $transaction->ProductID = request('product');
        $transaction->StoreID = request('store');
        $transaction->Quantity = request('amount');
        $transaction->TotalPrice = request('price');
        $transaction->TransactionDate = \Carbon\Carbon::now();;

        $inventory = Inventory::where('ProductID', request('product'))->first();

        $inventory->InventoryNum -= request('amount');

        $transaction->save();

        session()->flash('success', 'Order Success');

        return redirect('/');
    }

    public function show($id) {
        $res = Transaction::find($id);
        return view('transaction/detail', compact($res));
    }
}
