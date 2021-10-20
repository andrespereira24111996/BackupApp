<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View; 

class InicioController extends Controller
{
    public function inicio ()
    {
           return view::make('home'); 

        }
}
