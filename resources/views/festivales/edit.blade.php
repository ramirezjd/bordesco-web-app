@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-6 margin-tb">
            <div class="pull-left">
                <h2>Editar Festival</h2>
            </div>
        </div>
        <div class="col-6 text-right my-auto">
                <a class="btn btn-primary" href="{{ route('festivales.index') }}"> Volver</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Algo salió mal con los datos que ingresó.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('festivales.update', $festival->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row mx-auto">
            <div class="col">
                <label for="nombre">Nombre</label>
                <input class="form-control " type="text" name="nombre" placeholder="Nombre del festival" value="{{ $festival->nombre }}" required>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col">
                <label for="nombre">Fecha de creación</label>
                <input class="form-control " type="text" name="fecha_creacion" placeholder="Fecha de creación del festival" value="{{$festival->fecha_creacion}}" >
            </div>
         <div class="row mt-3">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>

@endsection
