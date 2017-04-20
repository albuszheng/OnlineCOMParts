<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Salesperson extends Model
{

    protected $table = 'salesperson';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function Store() {
        return $this->belongsTo(Store::class, 'StoreID', 'id');
    }

    public static function getSalespersonByID($id) {
        $salespersons = DB::table('salesperson')
            ->where('id', $id)
            ->get();
        return $salespersons;
    }

    public static function getSalespersonByName($name) {
        $salespersons = DB::table('salesperson')
            ->where('FullName', $name)
            ->get();
        return $salespersons;
    }

}
