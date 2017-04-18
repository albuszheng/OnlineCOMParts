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
    protected $table = 'c_p_us';
    protected $primaryKey = 'Name';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static function getCPUByName($name) {
        $CPU = DB::table('c_p_us')
            ->join('products', 'products.ProductName', '=', 'c_p_us.Name')
            ->where('Name', 'like', $name)
            ->get();
        return $CPU;
    }

    public static function getCPUByManufacturer($manufacturerList) {
        $CPUs = DB::table('c_p_us')
            ->join('products', 'products.ProductName', '=', 'c_p_us.Name')
            ->whereIn('Manufacturer', $manufacturerList)
            ->get();
        return $CPUs;
    }

    public static function getCPUBySeries($series) {
        $query = "%".$series."%";
        $CPUs = DB::table('c_p_us')
            ->join('products', 'products.ProductName', '=', 'c_p_us.Name')
            ->where('Name', 'like', $query)
            ->get();
        return $CPUs;
    }

    public static function getCPUByCoreNum($coreNumMin, $coreNumMax) {
        $CPUs = DB::table('c_p_us')
            ->join('products', 'products.ProductName', '=', 'c_p_us.Name')
            ->where('Cores', '>=', $coreNumMin)
            ->where('Cores', '<=', $coreNumMax)
            ->get();
        return $CPUs;
    }

    public static function getCPUBySpeed($speedMin, $speedMax) {
        $CPUs = DB::table('c_p_us')
            ->join('products', 'products.ProductName', '=', 'c_p_us.Name')
            ->where('OperatingFrenquency', '>=', $speedMin)
            ->where('OperatingFrenquency', '<=', $speedMax)
            ->get();
        return $CPUs;
    }

    public static function getCPUByPower($powerMin, $powerMax) {
        $CPUs = DB::table('c_p_us')
            ->join('products', 'products.ProductName', '=', 'c_p_us.Name')
            ->where('ThermalDesignPower', '>=', $powerMin)
            ->where('ThermalDesignPower', '<=', $powerMax)
            ->get();
        return $CPUs;
    }

    public static function getCPUByPrice($priceMin, $priceMax) {
        $CPUs = DB::table('c_p_us')
            ->join('products', 'products.ProductName', '=', 'c_p_us.Name')
            ->where('products.ProductName', '>=', $priceMin)
            ->where('products.ProductName', '<=', $priceMax)
            ->get();
        return $CPUs;
    }

}
