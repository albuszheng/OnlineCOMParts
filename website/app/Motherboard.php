<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Motherboard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Motherboard';
    protected $primaryKey = 'Name';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function getMotherboardByName($name) {
        $Motherboard = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
            ->where('Name', 'like', $name)
            ->get();
        return $Motherboard;
    }

    public static function getMotherboard() {
        $Motherboards = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
//            ->join('inventory', 'inventory.ProductID', '=', 'products.id')
//            ->join('store', 'store.id', '=', 'inventory.StoreID')
            ->get();
        return $Motherboards;
    }

    public function getMotherboardByManufacturer($manufacturerList) {
        $Motherboards = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
            ->whereIn('Manufacturer', $manufacturerList)
            ->get();
        return $Motherboards;
    }

    public function getMotherboardBySocketCPU($socketCPUList) {
        $Motherboards = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
            ->whereIn('SocketCPU',  $socketCPUList)
            ->get();
        return $Motherboards;
    }

    public function getMotherboardByFormFactor($formFactorList) {
        $Motherboards = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
            ->whereIn('FormFactor',  $formFactorList)
            ->get();
        return $Motherboards;
    }

    public function getMotherboardByRAMSlots($RAMSlotsMin, $RAMSlotsMax) {
        $Motherboards = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
            ->where('RAMSlots', '>=', $RAMSlotsMin)
            ->where('RAMSlots', '<=', $RAMSlotsMax)
            ->get();    
        return $Motherboards;
    }

    public function getMotherboardByMaxRAM($MaxRAMMin, $MaxRAMMax) {
        $Motherboards = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
            ->where('MaxRAM', '>=', $MaxRAMMin)
            ->where('MaxRAM', '<=', $MaxRAMMax)
            ->get();
        return $Motherboards;
    }

    public function getMotherboardByPrice($priceMin, $priceMax) {
        $Motherboards = DB::table('Motherboard')
            ->join('products', 'products.ProductName', '=', 'Motherboard.Name')
            ->where('products.Price', '>=', $priceMin)
            ->where('products.Price', '<=', $priceMax)
            ->get();
        return $Motherboards;
    }
}
