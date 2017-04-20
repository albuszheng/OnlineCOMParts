<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


}
