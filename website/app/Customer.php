<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer_info';
    public $timestamps = false;

    public function Transactions() {
        return $this->hasMany(Transaction::class, 'CustomerID', 'id');
    }
}
