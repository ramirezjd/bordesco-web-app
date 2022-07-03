<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Festival;
use App\Categoria;
use App\Cat_event;
use App\Cura_event;
use App\Curador;
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
		
		/**
     * Agregar categorias al evento
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function agregarCategoria($id)
    {        
				$evento = Evento::findOrFail($id);
				$festival = Festival::findOrFail($evento->festivales_id);
        $categorias_evento = Cat_event::where('eventos_id', $id)->get();
				if( $categorias_evento->count() == 0 )
					$vcategorias= array(0,0); //evento sin categorias
				else{
					foreach ($categorias_evento as $marcadas)
						$vcategorias[] = $marcadas->categorias_id;
				}
        $categorias = Categoria::all();
         return view('eventos.agregarCategoria', [
            'evento' => $evento,
            'festival' => $festival,
            'categorias' => $categorias,
            'categorias_evento' => $vcategorias,
        ]);
		}

		/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardarCategoria( Request $request , $evento )
    {
       /* $request->validate([
            'anio' => 'required',
            'festival' => 'required',
            'inicio_convocatoria' => 'required',
            'fin_convocatoria' => 'required',
			 ]);*/
			foreach ($request->categoria as $categoria){
				$values[] = ['eventos_id'=>$evento , 'categorias_id'=>$categoria]; 
			}

        Cat_event::where('eventos_id',$evento)->delete();
        Cat_event::insert($values);

        return redirect()->route('eventos.index');
    }

		/**
     * Agregar categorias al evento
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function agregarCurador($id)
    {        
				$evento = Evento::findOrFail($id);
				$festival = Festival::findOrFail($evento->festivales_id);
        $curadores_evento = Cura_event::where('eventos_id', $id)->get();
				if( $curadores_evento->count() == 0 )
					$vcuradores= array(0,0); //evento sin curadores
				else{
					foreach ($curadores_evento as $marcadas)
						$vcuradores[] = $marcadas->curadores_id;
				}
        $curadores = Curador::all();
         return view('eventos.agregarCurador', [
            'evento' => $evento,
            'festival' => $festival,
            'curadores' => $curadores,
            'curadores_evento' => $vcuradores,
        ]);
		}

		/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardarCurador( Request $request , $evento )
    {
       /* $request->validate([
            'anio' => 'required',
            'festival' => 'required',
            'inicio_convocatoria' => 'required',
            'fin_convocatoria' => 'required',
			 ]);*/
			foreach ($request->curador as $curador){
				$values[] = ['eventos_id'=>$evento , 'curadores_id'=>$curador]; 
			}

        Cura_event::where('eventos_id',$evento)->delete();
        Cura_event::insert($values);

        return redirect()->route('eventos.index');
    }
}
