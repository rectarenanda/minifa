<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usera extends Model
{
    protected $table = 'mu_0000_user';
    public $timestamps = false;
    public function perusahaan(){
    	return $this->hasOne('App\Models\Perusahaan');
    }
}
