<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesperson extends Model
{
    public $timestamps = false;

    public function Store() {
        return $this->belongsTo(Store::class, 'StoreID', 'id');
    }
}
