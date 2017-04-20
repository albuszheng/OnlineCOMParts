<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use DateTime;

class Store extends Model
{
    public $timestamps = false;

    protected $table = 'store';
    protected $primaryKey = 'id';


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
        $now = new DateTime();
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
        $now = new DateTime();
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

    public function Manager() {
        return $this->hasOne(Salesperson::class, 'StoreID', 'id');
    }

    public function Region() {
        return $this->belongsTo(Region::class, 'RegionID', 'id');
    }

    public function Inventory() {
        return $this->hasMany(Inventory::class, 'StoreID', 'id');
    }

    public function Transactions() {
        return $this->hasMany(Transaction::class, 'StoreID', 'id');
    }
}
