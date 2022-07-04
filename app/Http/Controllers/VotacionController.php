<?php

namespace App\Http\Controllers;

use App\Votacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotacionController extends Controller
{
    /**
     * Display a listing of the resource.
		 * Recibe el parametro id del evento.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $inscritos = DB::select('select i.id, o.titulo, o.ano, c.nombre 
																from inscritos i 
																join obras o on (i.cat_obra_obr = o.id) 
																join categorias c on (i.cat_obra_cat = c.id)
																where i.cat_obra_eve = :id', ['id'=> $id]);
        return view('votaciones.index',compact('inscritos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Votacion::create([
            'nombre' => request('nombre'),
        ]);

        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Votacion  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscrito = DB::select('select * from inscritos where id = :id', ['id'=>$id]);

				$curadores = DB::select('select * from cura_event ce
				 												 join curadores cu on(cu.id = ce.curadores_id)
																join votaciones v on (v.cura_event_curador = ce.curadores_id)
																where ce.eventos_id = :id', ['id'=>$inscrito[0]->cat_obra_eve]);

				$votos = Votacion::where('cura_event_eve',$inscrito[0]->cat_obra_eve)
					->where('inscritos_obr',$inscrito[0]->cat_obra_obr)
					->where('inscritos_cat',$inscrito[0]->cat_obra_cat)->get();
	
        return view('votaciones.edit', [
            'inscrito' => $inscrito,
            'curadores' => $curadores,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Votacion  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Votacion::findOrFail($id);
        return view('categorias.edit', [
            'categoria' => $categoria,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inscrito = DB::select('select * from inscritos where id = :id', ['id'=>$id]);

				for ($i = 0 ; $i < count($request->voto) ; $i++ ){
					$values[] = ['voto'=>$request->voto[$i]
						, 'cura_event_curador'=>$request->curador[$i]
						,'inscritos_cat'=>$inscrito[0]->cat_obra_cat
						,'cura_event_eve'=>$inscrito[0]->cat_obra_eve
						,'inscritos_obr'=>$inscrito[0]->cat_obra_obr
					];
				}

				Votacion::where('cura_event_eve',$inscrito[0]->cat_obra_eve)
					->where('inscritos_obr',$inscrito[0]->cat_obra_obr)
					->where('inscritos_cat',$inscrito[0]->cat_obra_cat)
					->delete();

				Votacion::insert($values);
	
        
        return redirect()->route('votaciones',$inscrito[0]->cat_obra_eve);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        
        $categoria->delete();
        
        return redirect()->route('categorias.index');
    }
}
