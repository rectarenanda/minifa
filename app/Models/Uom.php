<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    protected $table = 'mu_0103_uom';
    public $timestamps = false;
    public function stock(){
    	return $this->hasMany('App\Models\Stock');
    }
}
