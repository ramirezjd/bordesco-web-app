@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-6 margin-tb">
            <div class="pull-left">
                <h2>Agregar Nueva Categoria</h2>
            </div>
        </div>
        <div class="col-6 text-right my-auto">
                <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Volver</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form>
        <div class="row mx-auto">
            <div class="col">
                <label for="nombre">Nombre</label>
                <input class="form-control " type="text" name="nombre" placeholder="Nombre de la categoria" value="{{$categoria->nombre}}" required>
            </div>
        </div>
    </form>
</div>

@endsection