<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Role';
    public $timestamps = false;

    public function can($action){
        $a_role = DB::table('RABC_Assign')->where('Action', $action)->get()->first();
        if ($a_role == $this->Role){
            return true;
        }
        return false;
    }
}
