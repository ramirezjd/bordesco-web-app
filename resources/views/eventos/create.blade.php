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
                <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Volver</a>
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

    <form action="{{ route('eventos.store') }}" method="POST">
        @csrf
        <div class="row mx-auto">
            <div class="col-md-4">
                <label for="anio">Año</label>
                <input class="form-control " type="text" name="anio" placeholder="Año" maxlength="4" required>
            </div>
            <div class="col-md-4">
                <label for="inicio_convocatoria">Inicio de convocatoria</label>
                <input class="form-control " type="date" name="inicio_convocatoria" placeholder="Nombre de la categoria" required>
            </div>
            <div class="col-md-4">
                <label for="fin_convocatoria">Fin de convocatoria</label>
                <input class="form-control " type="date" name="fin_convocatoria" placeholder="Nombre de la categoria" required>
            </div>
        </div>
        <div class="row mt-4 mx-auto">
            <div class="col-md-4 ">
                <label>Festival:</label><br>
                <select class="form-control" name="festival" id="festival" required>
                    <option value="">Seleccione el festival</option>
                    @foreach ($festivales as $festival)
                    <option value="{{ $festival->id }}">{{ $festival->nombre }}</option>
                    @endforeach
                </select>
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
