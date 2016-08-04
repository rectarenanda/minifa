<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
	protected $table = 'tr_0101_jurnal';
    public $timestamps = false;
    public function transaksi(){
    	return $this->hasMany('App\Models\Transaksi');
    }
}
