@extends('layouts.plantilla')

@section('content')
<section id="mostrar">
	<form  method="POST" action="{{url('/premios')}}/{{$premios->id}}">
		Monto del premio: <input type="number" name="descripcion" value="{{ $premios->descripcion}}">
		<input type="hidden" name="_method" value="PUT">
		@csrf
		<input type="submit" name="actualizar" value="actualizar">
	</form>
	<hr><form  method="POST" action="{{url('/premios')}}/{{$premios->id}}">
		@csrf
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" name="eliminar" value="eliminar">
	</form>
</section>


@endsection