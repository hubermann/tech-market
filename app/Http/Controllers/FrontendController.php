<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class FrontendController extends Controller
{
    public function index()
    {
    	#Cart::add('293ad', 'Product 1', 1, 9.99, ['size' => 'large']);
    	return View('layouts.frontend');
    }
}
