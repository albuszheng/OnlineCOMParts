<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    public $timestamps = false;

    public function CPU() {
        return $this->belongsTo(CPU::class, 'ProductName', 'Name');
    }

    public function GPU() {
        return $this->belongsTo(VideoCard::class, 'ProductName', 'Name');
    }

    public function Memory() {
        return $this->belongsTo(Memory::class, 'ProductName', 'Name');
    }

    public function Motherboard() {
        return $this->belongsTo(Motherboard::class, 'ProductName', 'Name');
    }

    public function Storage() {
        return $this->belongsTo(Storage::class, 'ProductName', 'Name');
    }

    public function Inventory() {
        return $this->hasOne(Inventory::class, 'ProductID', 'id');
    }

}
