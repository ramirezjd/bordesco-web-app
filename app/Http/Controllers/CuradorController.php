<?php

namespace App\Http\Controllers;

use App\Curador;
use Illuminate\Http\Request;

class CuradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
		{
			$curadores = Curador::all();
			return view('curadores.index',compact('curadores'));
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('curadores.create');
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
			$request->validate([
            'nombre' => 'required',
        ]);

        Curador::create([
            'nombre' => request('nombre'),
        ]);

        return redirect()->route('curadores.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curador  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$curador = Curador::findOrFail($id);
        return view('curadores.show', [
            'curador' => $curador,
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curador  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
				$curador = Curador::findOrFail($id);
        return view('curadores.edit', [
            'curador' => $curador,
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curador  $curador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$request->validate([
            'nombre' => 'required',
        ]);

        $curador = Curador::findOrFail($id);

        $curador->update([
            'nombre' => request('nombre'),
        ]);

        return redirect()->route('curadores.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curador  $curador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $curador = Curador::findOrFail($id);
				$curador->delete();
				
        return redirect()->route('curadores.index');
    }
}
