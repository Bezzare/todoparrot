<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
  function index()
  {
    $lists = array('Vacation Planning', 'Grocery Shopping', 'Camping Trip');
    // $lists = array();
    return view('welcome')
            ->with('name', 'San Juan Vacation')
            ->with('lists', $lists);
  }
}
