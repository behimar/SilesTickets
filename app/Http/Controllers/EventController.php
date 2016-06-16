<?php

namespace App\Http\Controllers;

use App\Event;
use App\Location;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$events = Event::all();
        $events = DB::table('events')
            ->orderBy('fecha_event', 'asc')
            ->paginate(5);

        return view('admin.eventos',compact('events'));
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
        //dd($request);
        $fecha = $request['fecha'];
        $hora = $request['hora'];
        $event = new Event([
            'titulo'        => $request['titulo'],
            'fecha_event'   => $fecha. "T" . $hora,
            'descripccion'   => $request['descripccion'],
            'user_id'   => $request['id'],
        ]);
        $event->save();
        /**creando los sectores */
        if ($request['Butacas']){
            $sector = new Location();
            $sector->localidad = 'Butacas';
            $sector->cantidad = '1843';
            $event->location()->save($sector);
        }
        if ($request['Preferencia']){
            $sector = new Location();
            $sector->localidad = 'Preferencia';
            $sector->cantidad = '3500';
            $event->location()->save($sector);
        }
        if ($request['General']){
            $sector = new Location();
            $sector->localidad = 'General';
            $sector->cantidad = '15042';
            $event->location()->save($sector);
        }
        if ($request['Curva_Norte']){
            $sector = new Location();
            $sector->localidad = 'Curva Norte';
            $sector->cantidad = '10379';
            $event->location()->save($sector);
        }
        if ($request['Curva_Sur']){
            $sector = new Location();
            $sector->localidad = 'Curva Sur';
            $sector->cantidad = '10379';
            $event->location()->save($sector);
        }
        Session::flash('message','Evento Creado Correctamente');
        return redirect()->route('listEvents');
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
        $event = Event::find($id);
        
        return view('admin.editarEvento',compact('event'));
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
        //dd($request);
        $event = Event::find($id);
        $fechas = $request['fecha'];
        $hora = $request['hora'];
        $event->titulo          = $request->titulo;
        $event->fecha_event     = $fechas. "T" . $hora;
        $event->descripccion    = $request->descripccion;
            
        $event->save();
        Flash::success('El evento ha sido actualizado exitosamente');
        return redirect()->route('listEvents');
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