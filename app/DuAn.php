<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuAn extends Model
{
    protected $table = 'du_ans';
    protected $guarded = [];

    public function member_model(){
        return $this -> hasMany('app\Member_model');
    }
}
