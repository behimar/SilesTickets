<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $user = Auth::User()->type;
        if ($user == 'administrador')
        {
            return view('layouts.panel');
        }
        elseif ($user == 'vendedor')
        {
            return view('vendedor.inicio');
        }
        elseif ($user == 'usuario')
        {
            return "olaaaa";
        }

    }

}
