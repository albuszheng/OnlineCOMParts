<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public static function findProduct($id){
        $temp = DB::table('products')->where('id', '=', $id)->get()->first();
//        $kind =$temp->ProductKind;
//        $res = DB::table('products')
//            ->where('id', $id)
//            ->join($kind, $kind.'.Name', '=', 'products.Name')
//            ->get()->first();
        return $temp;
    }

    public function CPU() {
        return $this->hasOne('APP\CPU', 'ProductName', 'Name');
    }
}
