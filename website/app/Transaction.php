<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use DateTime;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $dates = ['TransactionDate'];

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
            ->selectRaw('ProductID')
            ->where('StoreID', $storeid)
            ->whereDate('TransactionDate', Carbon::today())
            ->groupBy('ProductID')
            ->orderByRaw('count(*) desc')
            ->get()
            ->first();

        return $transaction;
    }

    public static function MonthlyBestseller($storeid) {
        $now = new DateTime();
        $transaction = DB::table('transactions')
            ->selectRaw('ProductID')
            ->where('StoreID', $storeid)
            ->whereMonth('TransactionDate', Carbon::today()->format('m'))
            ->groupBy('ProductID')
            ->orderByRaw('count(*) desc')
            ->get()
            ->first();

        return $transaction;
    }

}
