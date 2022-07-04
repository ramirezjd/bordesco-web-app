@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-6 margin-tb">
            <div class="pull-left">
                <h2>Agregar votacion de curadores</h2>
            </div>
        </div>
        <div class="col-6 text-right my-auto">
                <a class="btn btn-primary" href="{{ route('votaciones',$inscrito[0]->cat_obra_eve) }}"> Volver</a>
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

    <form action="{{ route('guardarVotos', $inscrito[0]->cat_obra_eve) }}" method="POST">
        @csrf
        @method('POST')
				@foreach ($curadores as $curador)
        <div class="row mx-auto">
            <div class="col">
                <label for="nombre">{{ $curador->nombre }}</label>
                <input type="text" name="curador[]" value="{{ $curador->id}}" hidden>
                <input class="form-control " type="text" name="voto[]" placeholder="Voto" value="{{ $curador->voto }}">
            </div>
        </div>
				@endforeach
        <div class="row mt-3">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>

@endsection
