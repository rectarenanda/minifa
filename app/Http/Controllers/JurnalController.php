<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JurnalController extends Controller
{
    public function index(){
    	$todos = Todo::all()
    }
}
