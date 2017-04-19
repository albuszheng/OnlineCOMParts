<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Memory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Memory';
    protected $primaryKey = 'Name';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static function getMemory() {
        $Memories = DB::table('Memory')
            ->join('products', 'products.ProductName', '=', 'Memory.Name')
//            ->join('inventory', 'inventory.ProductID', '=', 'products.id')
//            ->join('store', 'store.id', '=', 'inventory.StoreID')
            ->get();
        return $Memories;
    }

    public function getMemoryByName($name) {
        $Memory = DB::table('Memory')
            ->join('products', 'products.ProductName', '=', 'Memory.Name')
            ->where('Name', 'like', $name)
            ->get();
        return $Memory;
    }

    public function getMemoryByManufacturer($manufacturerList) {
        $Memories = DB::table('Memory')
            ->join('products', 'products.ProductName', '=', 'Memory.Name')
            ->whereIn('Manufacturer', $manufacturerList)
            ->get();
        return $Memories;
    }

    public function getMemoryBySpeed($speedList) {
        $Memories = DB::table('Memory')
            ->join('products', 'products.ProductName', '=', 'Memory.Name')
            ->whereIn('Speed',  $speedList)
            ->get();
        return $Memories;
    }

    public function getMemoryBySize($sizeMin, $sizeMax) {
        $Memories = DB::table('Memory')
            ->join('products', 'products.ProductName', '=', 'Memory.Name')
            ->where('Size', '>=', $sizeMin)
            ->where('Size', '<=', $sizeMax)
            ->get();
        return $Memories;
    }

    public function getMemoryByPricePerGB($pricePerGBMin, $pricePerGBMax) {
        $Memories = DB::table('Memory')
            ->join('products', 'products.ProductName', '=', 'Memory.Name')
            ->where('PricePerGB', '>=', $pricePerGBMin)
            ->where('PricePerGB', '<=', $pricePerGBMax)
            ->get();
        return $Memories;
    }

    public function getMemoryByPrice($priceMin, $priceMax) {
        $Memories = DB::table('Memory')
            ->join('products', 'products.ProductName', '=', 'Memory.Name')
            ->where('products.Price', '>=', $priceMin)
            ->where('products.Price', '<=', $priceMax)
            ->get();
        return $Memories;
    }
}
