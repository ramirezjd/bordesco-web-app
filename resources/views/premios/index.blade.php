@extends('layouts.plantilla')

@section('content')

<table id="empire">
	<tr>
		<th>Monto</th>
	</tr>
	@foreach ($premios as $premio)
	<tr>
   		<td>
   			<a href="{{url('/premios')}}/{{$premio->id}}/edit">
   			{{$premio->descripcion}}</a>
   		</td>
	</tr>@endforeach
</table>
<br>
<section>Click sobre el premio para editarlo</section>
<div>
	<h2>Agregar un nuevo premio</h2>
</div>
<section id="mostrar">
	<form  method="POST" action="{{url('/premios')}}">
	Monto del premio: <input type="number" name="descripcion">
	@csrf
	<input type="submit" name="enviar" value="agregar premo" >
</form>
</section>


@endsection
