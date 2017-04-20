<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CPU extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'CPU';
    protected $primaryKey = 'Name';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static function getCPU() {
        $CPU = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
//            ->join('inventory', 'inventory.ProductID', '=', 'products.id')
//            ->join('store', 'store.id', '=', 'inventory.StoreID')
            ->get();
        return $CPU;
    }

    public static function getCPUByName($name) {
        $CPU = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
            ->where('Name', 'like', $name)
            ->get();
        return $CPU;
    }

    public static function getCPUByManufacturer($manufacturerList) {
        $CPUs = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
            ->whereIn('Manufacturer', $manufacturerList)
            ->get();
        return $CPUs;
    }

    public static function getCPUBySeries($series) {
        $query = "%".$series."%";
        $CPUs = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
            ->where('Name', 'like', $query)
            ->get();
        return $CPUs;
    }

    public static function getCPUByCoreNum($coreNumMin, $coreNumMax) {
        $CPUs = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
            ->where('Cores', '>=', $coreNumMin)
            ->where('Cores', '<=', $coreNumMax)
            ->get();
        return $CPUs;
    }

    public static function getCPUBySpeed($speedMin, $speedMax) {
        $CPUs = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
            ->where('OperatingFrenquency', '>=', $speedMin)
            ->where('OperatingFrenquency', '<=', $speedMax)
            ->get();
        return $CPUs;
    }

    public static function getCPUByPower($powerMin, $powerMax) {
        $CPUs = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
            ->where('ThermalDesignPower', '>=', $powerMin)
            ->where('ThermalDesignPower', '<=', $powerMax)
            ->get();
        return $CPUs;
    }

    public static function getCPUByPrice($priceMin, $priceMax) {
        $CPUs = DB::table('CPU')
            ->join('products', 'products.ProductName', '=', 'CPU.Name')
            ->where('products.ProductName', '>=', $priceMin)
            ->where('products.ProductName', '<=', $priceMax)
            ->get();
        return $CPUs;
    }

    public function product() {
        return $this->hasMany(Product::class, 'Name', 'ProductName');
    }

}
