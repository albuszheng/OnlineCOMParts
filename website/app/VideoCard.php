<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VideoCard extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'VideoCard';
    protected $primaryKey = 'Name';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static function getVideoCard() {
        $VideoCards = DB::table('VideoCard')
            ->join('products', 'products.ProductName', '=', 'VideoCard.Name')
//            ->join('inventory', 'inventory.ProductID', '=', 'products.id')
//            ->join('store', 'store.id', '=', 'inventory.StoreID')
            ->get();
        return $VideoCards;
    }

    public function getVideoCardByName($name) {
        $VideoCard = DB::table('VideoCard')
            ->join('products', 'products.ProductName', '=', 'VideoCard.Name')
            ->where('Name', 'like', $name)
            ->get();
        return $VideoCard;
    }

    public function getVideoCardByManufacturer($manufacturerList) {
        $VideoCards = DB::table('VideoCard')
            ->join('products', 'products.ProductName', '=', 'VideoCard.Name')
            ->whereIn('Manufacturer', $manufacturerList)
            ->get();
        return $VideoCards;
    }

    public function getVideoCardByChipset($chipset) {
        $query = "%".$chipset."%";
        $VideoCards = DB::table('VideoCard')
            ->join('products', 'products.ProductName', '=', 'VideoCard.Name')
            ->where('Chipset', 'like',  $query)
            ->get();
        return $VideoCards;
    }

    public function getVideoCardByMemory($memoryMin, $memoryMax) {
        $VideoCards = DB::table('VideoCard')
            ->join('products', 'products.ProductName', '=', 'VideoCard.Name')
            ->where('Memory', '>=', $memoryMin)
            ->where('Memory', '<=', $memoryMax)
            ->get();
        return $VideoCards;
    }

    public function getVideoCardByCoreClock($coreClockMin, $coreClockMax) {
        $VideoCards = DB::table('VideoCard')
            ->join('products', 'products.ProductName', '=', 'VideoCard.Name')
            ->where('CoreClock', '>=', $coreClockMin)
            ->where('PricePerGB', '<=', $coreClockMax)
            ->get();
        return $VideoCards;
    }

    public function getVideoCardByPrice($priceMin, $priceMax) {
        $VideoCards = DB::table('VideoCard')
            ->join('products', 'products.ProductName', '=', 'VideoCard.Name')
            ->where('products.Price', '>=', $priceMin)
            ->where('products.Price', '<=', $priceMax)
            ->get();
        return $VideoCards;
    }
}
