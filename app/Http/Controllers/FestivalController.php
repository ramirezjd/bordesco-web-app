<?php

namespace App\Http\Controllers;

use App\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
		{
			$festivales = Festival::all();
			return view('festivales.index',compact('festivales'));
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('festivales.create');
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

        Festival::create([
            'nombre' => request('nombre'),
            'fecha_creacion' => request('fecha_creacion'),
        ]);

        return redirect()->route('festivales.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Festival  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$festival = Festival::findOrFail($id);
        return view('festivales.show', [
            'festival' => $festival,
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Festival  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
				$festival = Festival::findOrFail($id);
        return view('festivales.edit', [
            'festival' => $festival,
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$request->validate([
            'nombre' => 'required',
        ]);

        $festival = Festival::findOrFail($id);

        $festival->update([
            'nombre' => request('nombre'),
            'fecha_creacion' => request('fecha_creacion'),
        ]);

        return redirect()->route('festivales.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $festival = Festival::findOrFail($id);
				$festival->delete();
				
        return redirect()->route('festivales.index');
    }

    /**
     * Show the metrics dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function stats()
    {
        return view('estadisticas.index');
    }
}
