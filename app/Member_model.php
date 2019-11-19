<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member_model extends Model
{
//    protected $table='member_models';
//    public $primaryKey='id_member';
//    public $timestamps =true;
    protected $fillable=[
        ];
    public function duan(){
        return $this ->belongsTo('app\DuAn');
    }
}
