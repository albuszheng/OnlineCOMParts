<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $total = Product::findAll();
        return view('product/all', compact($total));
    }

    public function kindList($kind) {
        $res = Product::findKind($kind);
        return view('product/all', compact($res));
    }

    public function detail($id) {
        $res = Product::find($id);
        return view('product/detail', compact($res));
    }
}
