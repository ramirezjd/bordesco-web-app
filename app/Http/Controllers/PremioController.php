<?php

namespace App\Http\Controllers;

use App\Premio;
use Illuminate\Http\Request;

class PremioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
		{
			$premios = Premio::all();
			return view('premios.index',compact('premios'));
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('premios.create');
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
            'descripcion' => 'required',
        ]);

        Premio::create([
            'descripcion' => request('descripcion'),
        ]);

        return redirect()->route('premios.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Premio  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$premio = Premio::findOrFail($id);
        return view('premios.show', [
            'premio' => $premio,
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Premio  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
				$premio = Premio::findOrFail($id);
        return view('premios.edit', [
            'premio' => $premio,
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$request->validate([
            'descripcion' => 'required',
        ]);

        $premio = Premio::findOrFail($id);

        $premio->update([
            'descripcion' => request('descripcion'),
        ]);

        return redirect()->route('premios.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $premio = Premio::findOrFail($id);
				$premio->delete();
				
        return redirect()->route('premios.index');
    }
}
