@extends('layouts.app')

@section('content')

<table>
	<th>
		<td>Monto</td>
	</th>
	@foreach ($premios as $premio)
	<tr>
   		<td>
   			<a href="{{url('/premios')}}/{{$premio->id}}/edit">
   			{{$premio->descripcion}}</a></td>
	</tr>@endforeach
</table>

<form  method="POST" action="{{url('/premios')}}">
	Monto del premio: <input type="number" name="descripcion">
	@csrf
	<input type="submit" name="enviar">
</form>
@endsection
