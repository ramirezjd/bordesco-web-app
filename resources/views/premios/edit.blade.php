@extends('layouts.app')

@section('content')

<form  method="POST" action="{{url('/premios')}}/{{$premios->id}}">
	Monto del premio: <input type="number" name="descripcion" value="{{ $premios->descripcion}}">
	<input type="hidden" name="_method" value="PUT">
	@csrf
	<input type="submit" name="actualizar">
</form>
@endsection