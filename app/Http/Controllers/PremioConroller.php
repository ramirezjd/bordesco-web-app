<?php

namespace App\Http\Controllers;

use App\Premio;
use Illuminate\Http\Request;

class PremioConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //re
        $premios = Premio::all();
        return view('premios.index', compact('premios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('premios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*/view('premios.create');
        $premios = new Premio;
        $premios->descripcion = $request->descripcion;
        $premios->save();*/
        Premio::create([
            'descripcion' => request('descripcion'),
        ]);
         return redirect('/premios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Premio::find($id);
        $premios = Premio::find($id);
        return view('premios.show', compact('premios'));
       // return  'descripcion';
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
        $premios = Premio::find($id);
        return view('premios.edit', compact('premios'));
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
        //view('premios.updae');
         $premios = Premio::find($id);
          $premios->update($request->all());
         return redirect('/premios');
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
