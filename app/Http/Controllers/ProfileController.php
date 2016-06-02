<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.crearPerfil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile([
           'carnet'     => $request['carnet'],
           'nombre'     => $request['nombre'],
           'apP'     => $request['apP'],
           'apM'     => $request['apM'],
           'telefono'     => $request['telefono'],
           'fechaNac'     => $request['fechaNac'],
           'user_id'     => $request['id'],
        ]);
        $profile->save();
        $user = User::find($request['id']);
        
        Session::flash('message','Datos ingresados Correctamente');
        return view('profile.perfil',compact('user','profile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        //$profile = User::find($id)->Profile;
        $profile = DB::table('profiles')
            ->where('users.id',$id)
            ->leftJoin('users','profiles.user_id','=','users.id')
            ->select('name','email','type','nombre','apP','apM','telefono','fechaNac','carnet')
            ->get();
        
        if($profile == null)
        {
            return view('profile.perfilNull');
        }
        else
        {
            return view('profile.perfil',compact('user','profile'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
