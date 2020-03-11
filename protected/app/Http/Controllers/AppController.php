<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use DB;

class AppController extends BaseController
{
    function index(){

      return view('authentication.register');
    }
}
