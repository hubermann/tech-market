<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BackendController extends Controller
{
    //

	public function index()
	{
		return View('layouts.backend');
	}
}
