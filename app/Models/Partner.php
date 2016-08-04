<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'mu_0102_partner';
    public $timestamps = false;
    public function transaksi(){
    	return $this->hasMany('App\Models\Transaksi');
    }
}
