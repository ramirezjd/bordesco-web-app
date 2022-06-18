@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-6 margin-tb">
            <div class="pull-left">
                <h2>Agregar Nuevo Premio</h2>
            </div>
        </div>
        <div class="col-6 text-right my-auto">
                <a class="btn btn-primary" href="{{ route('premios.index') }}"> Volver</a>
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

    <form action="{{ route('premios.store') }}" method="POST">
        @csrf
        <div class="row mx-auto">
            <div class="col">
                <label for="descripcion">Descripcion</label>
                <input class="form-control " type="text" name="descripcion" placeholder="Descripcion del premio" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>

@endsection