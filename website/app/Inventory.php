<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use DateTime;

class Inventory extends Model
{
    protected $table = 'inventory';
    public $timestamps = false;

    protected $primaryKey = 'StoreID, ProductID';


    public function Store() {
        return $this->belongsTo(Store::class, 'StoreID', 'id');
    }

    public static function ModifyInventoryNumByID($productid, $newNum) {
        $now = new DateTime();
        $inventory = DB::table('inventory')
            ->where('ProductID', $productid)
            ->update(['InventoryNum' => $newNum])
            ->update(['LastUpdate' => $now]);
        return $inventory;
    }
    
}
