<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
	public function about()
	{
		$user_name = "ドラえもん";

		return view('index', compact('user_name'));
	}
}
