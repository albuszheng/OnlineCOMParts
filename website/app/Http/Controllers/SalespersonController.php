<?php

namespace App\Http\Controllers;

use App\Transaction;
use Carbon\Carbon;
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
        $salesperson = Auth::user()->SalespersonInfo;
        $dailyBS = Transaction::DailyBestseller($salesperson->StoreID);
        $monthlyBS = Transaction::MonthlyBestseller($salesperson->StoreID);
        if (!$dailyBS) {
            if (!$monthlyBS) {
                return view("dashboard.index", ['salesperson' => $salesperson, 'daily_bs' => null, 'monthly_bs' => null]);
            }else{
                return view("dashboard.index", ['salesperson' => $salesperson, 'daily_bs' => null, 'monthly_bs' => Product::find($monthlyBS->ProductID)]);
            }
        } else {
            if (!$monthlyBS) {
                return view("dashboard.index", ['salesperson' => $salesperson, 'daily_bs' => Product::find($dailyBS->ProductID), 'monthly_bs' => null]);
            }else{
                return view("dashboard.index", ['salesperson' => $salesperson, 'daily_bs' => Product::find($dailyBS->ProductID), 'monthly_bs' => Product::find($monthlyBS->ProductID)]);
            }
        }
    }

    public function inventory()
    {
        $salesperson = Auth::user()->SalespersonInfo;
        return view("dashboard.products", ['salesperson' => $salesperson]);
    }

    public function updateInventory($productID)
    {
        if (Inventory::where('ProductID', $productID)->update(['InventoryNum'=>request('newInventory'), 'LastUpdate'=>Carbon::today()])){
            session()->flash('message', 'update success');
        }
        $salesperson = Auth::user()->SalespersonInfo;
        return redirect('/dashboard/products');

    }

    public function transactions(){
        $salesperson = Auth::user()->SalespersonInfo;
        return view("dashboard.transactions", ['salesperson' => $salesperson]);

    }
}
