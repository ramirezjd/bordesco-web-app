<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Festival;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::with('festival')->get();
        return view('eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $festivales = Festival::all();
        return view('eventos.create',compact('festivales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'anio' => 'required',
            'festival' => 'required',
            'inicio_convocatoria' => 'required',
            'fin_convocatoria' => 'required',
        ]);

        Evento::create([
            'ano' => request('anio'),
            'inicio_convocatoria' => request('inicio_convocatoria'),
            'fin_convocatoria' => request('fin_convocatoria'),
            'festivales_id' => request('festival'),
        ]);

        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('eventos.show', [
            'evento' => $evento,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Number  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::where('id', $id)->with('festival')->firstOrFail();
        $festivales = Festival::all();
        return view('eventos.edit', [
            'evento' => $evento,
            'festivales' => $festivales,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $evento)
    {
        $request->validate([
            'anio' => 'required',
            'festival' => 'required',
            'inicio_convocatoria' => 'required',
            'fin_convocatoria' => 'required',
        ]);
                
        $evento->update([
            'ano' => request('anio'),
            'inicio_convocatoria' => request('inicio_convocatoria'),
            'fin_convocatoria' => request('fin_convocatoria'),
            'festivales_id' => request('festival'),
        ]);
        
        return redirect()->route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($evento)
    {        
        $evento->delete();
        
        return redirect()->route('eventos.index');
    }
}
