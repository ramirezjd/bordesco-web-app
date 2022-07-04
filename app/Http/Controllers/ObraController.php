<?php

namespace App\Http\Controllers;

use App\Obra;
use App\Categoria;
use App\Representante;
use Illuminate\Http\Request;

class ObraController extends Controller
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
        $categorias = Categoria::all();
        return view('obras.create',compact('categorias'));
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
            // Datos Representante
            'nombre_rep' => 'required',
            'correo_rep' => 'required',
            'procedencia_rep' => 'required',
            'telefono_rep' => 'required',
            
            // Datos Obra
            'titulo' => 'required',
            'ano' => 'required',
            'duracion' => 'required',
            'genero' => 'required',
            'sinopsis' => 'required',
            'direccion' => 'required',
            'produccion' => 'required',
            'guion' => 'required',
            'fotografia' => 'required',
            'sonido' => 'required',
            'elenco' => 'required',
            'fotograma' => 'required',
            'afiche' => 'required',
            'enlace' => 'required',
            'clave_acceso' => 'required',
            'observaciones' => 'required',
            'idioma' => 'required',
            // 'tiene_subtitulo' => 'required',
            'subtitulos' => 'required',
        ]);
        // dd($request);

        $representante = Representante::create([
            'nombre' => request('nombre_rep'),
            'correo' => request('correo_rep'),
            'procedencia' => request('procedencia_rep'),
            'telefono' => request('telefono_rep'),
        ]);

        $obra = Obra::create([
            'representantes_id' => $representante->id,
            'titulo' => request('titulo'),
            'ano' => request('ano'),
            'duracion' => request('duracion'),
            'genero' => request('genero'),
            'sinopsis' => request('sinopsis'),
            'direccion' => request('direccion'),
            'produccion' => request('produccion'),
            'guion' => request('guion'),
            'fotografia' => request('fotografia'),
            'sonido' => request('sonido'),
            'elenco' => request('elenco'),
            'fotograma' => request('fotograma'),
            'afiche' => request('afiche'),
            'enlace de descarga' => request('enlace'),
            'clave_acceso' => request('clave_acceso'),
            'observaciones' => request('observaciones'),
            'idioma' => request('idioma'),
            'tieneSubitulo' => 1, //request('tiene_subtitulo') == "on" ? 1 : 0
            'arch_subtitulo' => request('subtitulos'),
        ]);

        return redirect()->route('obras.create')->with('success','Obra Registrada Exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function show(Obra $obra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function edit(Obra $obra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $obra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        //
    }
}
