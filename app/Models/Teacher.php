<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $guarded = ['id'];
    public function classroom(){
        return $this->hasMany(HomeRoom::class,'teachers_id','id');
    }
}
