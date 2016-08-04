<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'tr_0102_transaksi';
    public $timestamps = false;
    public function stock(){
    	return $this->hasMany('App\Models\Stock');
    }
    public function jurnal(){
    	return $this->hasMany('App\Models\Jurnal');
    }
}
