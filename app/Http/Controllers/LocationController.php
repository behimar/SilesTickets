<?php

namespace App\Http\Controllers;

use App\Event;
use App\Location;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.localidades_new',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**ASI ES COMO UTILIZAN LAS RELACIONES
        $event = \App\Event::find(1);
        $locali = new \App\Location();
        $locali->localidad = 'Recta';
        $locali->cantidad = '5000';
        $locali->precio = '80';
        $event->location()->save($locali);
        $locali = new \App\Location();
        $locali->localidad = 'Curva Norte';
        $locali->cantidad = '5000';
        $locali->precio = '50';
        $event->location()->save($locali);
        */
        $event = Event::find($request['id']);
        $localidad = new Location([
            'localidad' => $request['localidad'],
            'cantidad' => $request['cantidad'],
            'precio' => $request['precio'],
        ]);
        $event->location()->save($localidad);
        return redirect()->route('localidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sector = Location::find($id);
        
        return view('');
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
