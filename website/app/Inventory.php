<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use DateTime;
$now = new DateTime();
class Inventory extends Model
{

    protected $table = 'inventory';
    protected $primaryKey = 'StoreID, ProductID';

    public $timestamps = false;


    public function Store() {
        return $this->belongsTo(Store::class, 'StoreID', 'id');
    }

    public static function ModifyInventoryNumByID($productid, $newNum) {
        $inventory = DB::table('inventory')
            ->where('ProductID', $productid)
            ->update(['InventoryNum' => $newNum]);
            ->update(['LastUpdate' => $now]);
        return $transaction;
    }
    
}
