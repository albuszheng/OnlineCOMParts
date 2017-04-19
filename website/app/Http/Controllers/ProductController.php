<?php

namespace App\Http\Controllers;

use App\CPU;
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
                return view("products.product_list", ["products" => VideoCard::getGPU(), "kind" => "GPU"]);
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
        $res = Product::findProduct($id);
        $spec = Product::findSpec($res->id, $res->ProductKind);
        return view('products.product_detail', ["spec" => $spec, "product" => $res]);
    }
}
