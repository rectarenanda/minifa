<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
	public function index()
	{
		$groups = Group::all();

		return view('group.index')->with('grup',$groups);
		// , ['groups' => $groups]);
	}
}