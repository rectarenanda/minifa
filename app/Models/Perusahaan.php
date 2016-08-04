<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'mu_0101_perusahaan';
    public $timestamps = false;
    public function partner(){
    	return $this->hasMany('App\Models\Partner');
    }
    public function stock(){
    	return $this->hasMany('App\Models\Stock');
    }
    public function jurnal(){
    	return $this->hasMany('App\Models\Jurnal');
    }
    public function transaksi(){
    	return $this->hasMany('App\Models\Transaksi');
    }
    public function uom(){
    	return $this->hasMany('App\Models\Uom');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
