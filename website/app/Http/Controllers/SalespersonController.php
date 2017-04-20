<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Inventory;
use App\Product;

class SalespersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view("dashboard.index", ['Salesperson' => Auth::user()->SalespersonInfo]);
    }

    public function inventory($storeId)
    {
        $res = Inventory::findStore($storeId);
        return view("dashboard/inventoryList", compact($res));
    }

    public function updateInventory()
    {
        $res_p = Inventory::update();
    }

    public function newProduct()
    {
        $res_p = Product::new();
        $res_I = Inventory::update();
        return view("dashboard/index");
    }
}
