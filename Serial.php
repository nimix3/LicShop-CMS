<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    protected $table = 'serial';
    protected $fillable = ['username','password','lisence_code','is_sell','antivirus_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
