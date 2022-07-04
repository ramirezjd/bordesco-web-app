@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row px-auto justify-content-between mb-3">
        <div class="col-auto margin-tb">
            <h2>Gestionar Votaciones</h2>
        </div>
         <div class="col-6 text-right my-auto">
                <a class="btn btn-primary" href=""> Volver</a>
        </div>
     </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-1">
                    <thead>
                        <tr>
                            <th class="text-center">Titulo</th>
                            <th class="text-center">Año</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Votar</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($inscritos as $obra)
                        <tr>
                            
                            <td class="text-center">
                              {{ $obra->titulo}}
                            </td>
                             <td class="text-center">
                              {{ $obra->ano}}
                            </td>
                              <td class="text-center">
                              {{ $obra->nombre}}
                            </td>
                           <td class="text-center">
                              <ul class="table-controls">

                                <li>
                                    <a href="{{ route('votar',$obra->id) }}" data-toggle="tooltip" data-placement="top" title="Votar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-success"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>
                                </li>

                                 
                              </ul>
                              </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
