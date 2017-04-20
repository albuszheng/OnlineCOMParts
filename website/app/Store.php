<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $timestamps = false;
    public function Store() {
        return $this->hasMany(Salesperson::class, 'StoreID', 'id');
    }

    public function Region() {
        return $this->belongsTo(Region::class, 'RegionID', 'id');
    }
}
