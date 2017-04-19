<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Storage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Storage';
    protected $primaryKey = 'Name';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static function getStorage() {
        $Storages = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
//            ->join('inventory', 'inventory.ProductID', '=', 'products.id')
//            ->join('store', 'store.id', '=', 'inventory.StoreID')
            ->get();
        return $Storages;
    }

    public function getStorageByName($name) {
        $Storage = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
            ->where('Name', 'like', $name)
            ->get();
        return $Storage;
    }

    public function getStoragedByManufacturer($manufacturerList) {
        $Storages = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
            ->whereIn('Manufacturer', $manufacturerList)
            ->get();
        return $Storages;
    }

    public function getStorageByForm($form) {
        $Storages = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
            ->where('Form',  $form)
            ->get();
        return $Storages;
    }  

    public function getStorageByType($type) {
        $Storages = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
            ->where('Type',  $type)
            ->get();
        return $Storages;
    }

    public function getStorageByCapacity($capacityMin, $capacityMax) {
        $Storages = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
            ->where('Capacity', '>=', $capacityMin)
            ->where('Capacity', '<=', $capacityMax)
            ->get();
        return $Storages;
    }

    public function getStorageByPricePerGB($pricePerGBMin, $pricePerGBMax) {
        $Storages = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
            ->where('PricePerGB', '>=', $pricePerGBMin)
            ->where('PricePerGB', '<=', $pricePerGBMax)
            ->get();
        return $Storages;
    }

    public function getStorageByPrice($priceMin, $priceMax) {
        $Storages = DB::table('Storage')
            ->join('products', 'products.ProductName', '=', 'Storage.Name')
            ->where('products.Price', '>=', $priceMin)
            ->where('products.Price', '<=', $priceMax)
            ->get();
        return $Storages;
    }
}
