<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Region extends Model
{
    protected $table = 'regions';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public static function getRegionByManager($managerID) {
        $regions = DB::table('regions')
            ->join('salesperson', 'regions.id', '=', 'store.RegionID')
            ->where('salesperson.JobTitle','manager')
            ->get();
        return $regions;
    }

    public static function getRegionByName($name) {
        $regions = DB::table('regions')
            ->where('RegionName', 'like', $name)
            ->get();
        return $regions;
    }

    public static function getRegionByID($id) {
        $regions = DB::table('regions')
            ->where('id', $id)
            ->get();
        return $regions;
    }

}
