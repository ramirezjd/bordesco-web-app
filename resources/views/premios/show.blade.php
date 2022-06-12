@extends('layouts.´plantilla')

@section('content')

<form method="POST" action="{{url('/premios/')}}">>
	Cantdad: <input type="number" name="descripcion" value="{{ $premios->descripcion}}">
	<input type="submit" name="actualizar" value="actualizar">
</form>
@endsection