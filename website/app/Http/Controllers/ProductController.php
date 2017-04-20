<?php

namespace App\Http\Controllers;

use App\CPU;
use App\Inventory;
use App\Memory;
use App\Motherboard;
use App\Storage;
use App\Store;
use App\VideoCard;
use Illuminate\Http\Request;
use App\Product;

use function PHPSTORM_META\type;

class ProductController extends Controller
{
    public function index() {
        $total = Product::findAll();
        return view('product/all', compact($total));
    }

    public function kindList($kind) {
        switch ($kind) {
            case "cpu":
                return view("products.product_list", ["products" => CPU::getCPU(), "kind" => "CPU"]);
                break;
            case "gpu":
                return view("products.product_list", ["products" => VideoCard::getVideoCard(), "kind" => "GPU"]);
                break;
            case "memory":
                return view("products.product_list", ["products" => Memory::getMemory(), "kind" => "Memory"]);
                break;
            case "motherboard":
                return view("products.product_list", ["products" => Motherboard::getMotherboard(), "kind" => "Motherboard"]);
                break;
            case "harddrive":
                return view("products.product_list", ["products" => Storage::getStorage(), "kind" => "Storage"]);
                break;
        }
        return redirect("/404");
    }

    public function detail($id) {
        $res = Product::find($id);
        return view('products.product_detail', ["product" => $res, "kind" => $res->ProductKind]);
    }

    public function create(){
        return view('dashboard.new_product');
    }

    public function store(){
        $product = new Product;

        $product->ProductName = request('product-name');
        $product->Price = request('product-price');
        $product->ProductKind = request('product-kind');

        $product->save();

        $inventory = new Inventory;

        $inventory->StoreID = 1;
        $inventory->ProductID = $product->id;
        $inventory->InventoryNum = request('product-inventory');
        $inventory->LastUpdate = \Carbon\Carbon::now();

//        $inventory->save();

        session()->flash('message', 'New Product Added');

        return redirect('/dashboard');
    }
}
