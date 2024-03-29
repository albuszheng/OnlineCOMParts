<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Product;

class StoreController extends Controller
{
    public function contact($id)
    {
        $res = Store::findContact($id);
        return view('transaction/success', compact($res));
    }

    public function salesperson($id) {
        $res = Store::findSalesperson($id);
        return view('transaction/success', compact($res));
    }

    public function products($id) {
        $res = Product::findStore($id);
        return view('transaction/success', compact($res));
    }

    public function index($id) {
        $res = Store::find($id);
        return view('transaction/success', compact($res));
    }
}
