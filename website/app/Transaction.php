<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function Customer() {
        return $this->belongsTo(Customer::class, 'CustomerID', 'id');
    }

    public function Product() {
        return $this->belongsTo(Product::class, 'ProductID', 'id');
    }

    public function Salesperson() {
        return $this->belongsTo(Salesperson::class, 'SalespersonID', 'id');
    }
}
