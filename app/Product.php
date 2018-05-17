<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name','state','des','img','price','mobile','pc','count_user_pc','count_user_mobile'];

    public function serial()
    {
        return $this->hasMany('App\Serial');
    }
}
