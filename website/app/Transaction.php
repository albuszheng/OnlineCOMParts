<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use DateTime;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function Customer() {
        return $this->belongsTo(Customer::class, 'CustomerID', 'id');
    }

    public function Product() {
        return $this->belongsTo(Product::class, 'ProductID', 'id');
    }

    public function Store() {
        return $this->belongsTo(Store::class, 'StoreID', 'id');
    }

    public static function ModifyTransactionStatusByID($id) {
        $transaction = DB::table('transactions')
            ->where('id', $id)
            ->where('TransactionStatus', 'NotYetDelivered')
            ->update(['TransactionStatus' => 'Delivered']);
        return $transaction;
    }

    public static function DailyBestseller($storeid) {
        $now = new DateTime();
        $transaction = DB::table('transactions')
            ->where('StoreID', $storeid)
            ->where('TransactionDate', $now)
            ->groupBy('ProductID')
            ->orderBy('count()','desc')
            ->get()
            ->first();

        return $transaction;
    }

    public static function MonthlyBestseller($storeid) {
        $now = new DateTime();
        $transaction = DB::table('transactions')
            ->where('StoreID', $storeid)
            ->where('TransactionDate', '>=', $now - 15)
            ->where('TransactionDate', '>=', $now + 15)
            ->groupBy('ProductID')
            ->orderBy('count()','desc')
            ->get()
            ->first();

        return $transaction;
    }

}
