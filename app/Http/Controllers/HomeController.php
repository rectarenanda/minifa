<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Usera;
use App\Models\Perusahaan;

class HomeController extends Controller
{
    public function index()
	{
		$where = array('PERUSAHAAN_ID' => '1');
		// $usera = Perusahaan::where($where)->get();
		$comp = Perusahaan::where($where)->get();
		// $users = (object) $usera;
		 // print_r($users);
		return view('layout.master', ['comps' => $comp]);
		// , ['groups' => $groups]);
	}
}
