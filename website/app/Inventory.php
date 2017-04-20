<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    public $timestamps = false;

    public function Store() {
        return $this->belongsTo(Store::class, 'StoreID', 'id');
    }
}
