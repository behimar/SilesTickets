<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

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
            if (Auth::User()->profile == null)
            {
                Flash::info('Por favor, ingresa tus tados personales');
                return view('profile.crearPerfil');
            }
            Flash::info('Bienvenido '.Auth::User()->profile->nombre);
            return view('layouts.panel');
        }
        elseif ($user == 'vendedor')
        {
            if (Auth::User()->profile == null)
            {
                Flash::info('Por favor, ingresa tus tados personales');
                return view('profile.crearPerfil');
            }
            Flash::info('Bienvenido '.Auth::User()->profile->nombre);

            return view('vendedor.inicio');
        }
        elseif ($user == 'cliente')
        {
            $events = DB::table('events')
                ->orderBy('fecha_event', 'asc')
                ->paginate(5);
            return view('client.inicio',compact('events'));
        }

    }

}
