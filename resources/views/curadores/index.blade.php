@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row px-auto justify-content-between mb-3">
        <div class="col-auto margin-tb">
            <h2>Gestionar curadores</h2>
        </div>
        <div class="col-auto text-right">
            <a href="{{ route('curadores.create') }}" class="btn btn-success rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </a>
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
                            <th>ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($curadores as $curador)
                        <tr>
                            <td class="text-center">{{ $curador->id}}</td>
                            
                            <td class="text-center">{{ $curador->nombre}} </td>

                           <td class="text-center">
                              <ul class="table-controls">

                                <li>
                                    <a href="{{ route('curadores.edit',$curador->id) }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-success"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>
                                </li>

                                <li>
                                    <form action="{{ route('curadores.destroy',$curador->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-link p-0 m-0 bg-transparent shadow-none" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"> <polyline points="3 6 5 6 21 6"></polyline> <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"> </path> <line x1="10" y1="11" x2="10" y2="17"></line> <line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                    </button>
                                    </form>
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
