<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
     public function index(){
         return view('login');
    }

}
