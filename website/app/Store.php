<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use DateTime;
$now = new DateTime();
class Store extends Model
{

    protected $table = 'store';
    protected $primaryKey = 'id';


    public $timestamps = false;

    public static function getStoreByRegion($regionID) {
        $stores = DB::table('store')
            ->join('regions', 'regions.id', '=', 'store.RegionID')
            ->whereIn('RegionID', $regionID)
            ->get();
        return $stores;
    }

    public static function getStoreByName($name) {
        $stores = DB::table('store')
            ->where('Name', 'like', $name)
            ->get();
        return $stores;
    }

    public static function getStoreByID($id) {
        $stores = DB::table('store')
            ->where('id', $id)
            ->get();
        return $stores;
    }

    public static function DailyBestStore($regionid) {
        $stores = DB::table('store')
            ->join('regions', 'store.RegionID', '=', 'regions.ID')
            ->join('transactions', 'store.id', '=', 'transactions.StoreID')
            ->where('regions.ID', $regionid)
            ->where('transactions.TransactionDate', $now)
            ->groupBy('id')
            ->orderBy('SUM(transactions.TotalPrice)','desc')
            ->get()
            ->first();
        return $stores;
    }


    public static function MonthlyBestStore($regionid) {
        $stores = DB::table('store')
            ->join('regions', 'store.RegionID', '=', 'regions.ID')
            ->join('transactions', 'store.id', '=', 'transactions.StoreID')
            ->where('regions.ID', $regionid)
            ->where('transactions.TransactionDate', $now - 15)
            ->where('transactions.TransactionDate', $now + 15)
            ->groupBy('id')
            ->orderBy('SUM(transactions.TotalPrice)','desc')
            ->get()
            ->first();
        return $stores;
    }
    public function Store() {
        return $this->hasMany(Salesperson::class, 'StoreID', 'id');
    }

    public function Region() {
        return $this->belongsTo(Region::class, 'RegionID', 'id');
    }

}
