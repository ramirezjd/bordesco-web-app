@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row px-auto justify-content-between mb-3">
        <div class="col-auto margin-tb">
            <h2>Gestionar Categorias</h2>
        </div>
        <div class="col-auto text-right">
            <a href="{{ route('categorias.create') }}" class="btn btn-success rounded-circle">
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
                            <th>Nombre</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($categorias as $categoria)
                        <tr>
                            <td class="text-center">{{ $categoria->id}}</td>
                            
                            <td class="text-center">
                              {{ $categoria->nombre}}
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
