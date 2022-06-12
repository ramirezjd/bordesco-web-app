@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-6 margin-tb">
            <div class="pull-left">
                <h2>Editar evento</h2>
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

    <form>
        <div class="row mx-auto">
            <div class="col-md-4">
                <label for="anio">Año</label>
                <input class="form-control " type="text" name="anio" maxlength="4" value="{{$evento->ano}}" readonly>
            </div>
            <div class="col-md-4">
                <label for="inicio_convocatoria">Inicio de convocatoria</label>
                <input class="form-control " type="date" name="inicio_convocatoria" value="{{$evento->inicio_convocatoria}}" readonly>
            </div>
            <div class="col-md-4">
                <label for="fin_convocatoria">Fin de convocatoria</label>
                <input class="form-control " type="date" name="fin_convocatoria" value="{{$evento->fin_convocatoria}}" readonly>
            </div>
        </div>
        <div class="row mt-4 mx-auto">
            <div class="col-md-4">
                <label for="fin_convocatoria">Festival</label>
                <input class="form-control " type="text" name="festival" value="{{ $evento->festival->id}} - {{ $evento->festival->nombre}}" readonly>
            </div>
        </div>
    </form>
</div>

@endsection