@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-6 margin-tb">
            <div class="pull-left">
                <h2>Agregar curadores a {{ $festival->nombre }} {{$evento->ano}}</h2>
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

    <form action="{{ route('guardarCurador', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mx-auto">
            
        </div>
        <div class="row mt-4 mx-auto">
            <div class="col-md-4 ">
                <label>Curadores:</label><br>
                @foreach ($curadores as $curador)
									<input type="checkbox" id="curador[]" name="curador[]" value="{{ $curador->id }}" 
									@if (in_array($curador->id,$curadores_evento))
										checked
									@endif
									 >
									<label for="curador[]"> {{ $curador->nombre }}</label><br>
                @endforeach
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
