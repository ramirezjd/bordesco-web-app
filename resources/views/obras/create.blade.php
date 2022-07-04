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
                <a class="btn btn-primary" href="{{ route('obras.index') }}"> Volver</a>
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

    <form action="{{ route('obras.store') }}" method="POST">
        @csrf
        <!-- Inicio: apartado de representante -->
        <div class="row mx-auto mb-4">
            <div class="col-md-3">
                <label for="anio">Nombre del representante</label>
                <input class="form-control " type="text" name="nombre_rep" placeholder="Nombre del representante" maxlength="200" required>
            </div>
            <div class="col-md-3">
                <label for="inicio_convocatoria">Correo electrónico del representante</label>
                <input class="form-control " type="email" name="correo_rep" maxlength="150" placeholder="Correo electrónico del representante" required>
            </div>
            <div class="col-md-3">
                <label for="inicio_convocatoria">Procedencia del representante</label>
                <input class="form-control " type="text" name="procedencia_rep" maxlength="150" placeholder="Procedencia del representante" required>
            </div>
            <div class="col-md-3">
                <label for="inicio_convocatoria">Teléfono del representante</label>
                <input class="form-control " type="text" name="telefono_rep" maxlength="150" placeholder="Teléfono del representante" required>
            </div>
        </div>
        <!-- Fin: apartado de representante -->

        <!-- Inicio: apartado de obra -->
        <div class="row mx-auto mb-4">
            <div class="col">
                <label for="anio">Titulo de la obra</label>
                <input class="form-control " type="text" name="titulo" placeholder="Titulo de la obra" required>
            </div>
        </div>
        <div class="row mx-auto mb-4">
            <div class="col-md-4">
                <label for="anio">Año</label>
                <input class="form-control " type="text" name="ano" placeholder="Año" maxlength="4" required>
            </div>
            <div class="col-md-4">
                <label for="inicio_convocatoria">Duración</label>
                <input class="form-control " type="text" name="duracion" maxlength="8" placeholder="Duración de la obra" required>
            </div>
            <div class="col-md-4 ">
                <label>Genero:</label><br>
                <select class="form-control" name="genero" id="genero" required>
                    <option value="">Seleccione la categoria</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col">
                <label for="fin_convocatoria">Sinopsis</label>
                <textarea class="form-control " rows="4" name="sinopsis" placeholder="Sinopsis de la obra" required></textarea>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col-md-6">
                <label for="fin_convocatoria">Dirección</label>
                <textarea class="form-control " rows="4" maxlength="500" name="direccion" placeholder="Dirección de la obra" required></textarea>
            </div>
            <div class="col-md-6">
                <label for="fin_convocatoria">Producción</label>
                <textarea class="form-control " rows="4" maxlength="500" name="produccion" placeholder="Producción de la obra" required></textarea>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col-md-6">
                <label for="fin_convocatoria">Guion</label>
                <textarea class="form-control " rows="4" maxlength="500" name="guion" placeholder="Guion de la obra" required></textarea>
            </div>
            <div class="col-md-6">
                <label for="fin_convocatoria">Fotografía</label>
                <textarea class="form-control " rows="4" maxlength="500" name="fotografia" placeholder="Fotografía de la obra" required></textarea>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col-md-6">
                <label for="fin_convocatoria">Sonido</label>
                <textarea class="form-control " rows="4" maxlength="500" name="sonido" placeholder="Sonido de la obra" required></textarea>
            </div>
            <div class="col-md-6">
                <label for="fin_convocatoria">Elenco</label>
                <textarea class="form-control " rows="4" maxlength="900" name="elenco" placeholder="Elenco de la obra" required></textarea>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col-md-6">
                <label for="fin_convocatoria">Fotograma</label>
                <textarea class="form-control " rows="4" maxlength="900" name="fotograma" placeholder="Fotograma de la obra" required></textarea>
            </div>
            <div class="col-md-6">
                <label for="fin_convocatoria">Afiche</label>
                <textarea class="form-control " rows="4" maxlength="900" name="afiche" placeholder="Afiche de la obra" required></textarea>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col-md-6">
                <label for="fin_convocatoria">Enlace de descarga</label>
                <textarea class="form-control " rows="4" maxlength="900" name="enlace" placeholder="Enlace de descarga de la obra" required></textarea>
            </div>
            <div class="col-md-6">
                <label for="inicio_convocatoria">Clave de acceso</label>
                <input class="form-control " type="text" name="clave_acceso" maxlength="500" placeholder="Clave de acceso para la descarga" required>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col-md-6">
                <label for="fin_convocatoria">Observaciones</label>
                <textarea class="form-control " rows="4" maxlength="900" name="observaciones" placeholder="Observaciones de descarga de la obra" required></textarea>
            </div>
            <div class="col-md-6">
                <label for="inicio_convocatoria">Idioma</label>
                <input class="form-control " type="text" name="idioma" maxlength="80" placeholder="Idioma de la obra" required>
            </div>
        </div>
        <div class="row mt-4 mx-auto mb-4">
            <div class="col-md-6">
                <label for="inicio_convocatoria">Posee subtitulo: </label>
                <input class="mx-2" type="checkbox" name="tiene_subtitulo">
            </div>
            <div class="col-md-6">
                <label for="fin_convocatoria">Archivo de subtitulos</label>
                <textarea class="form-control " rows="1" maxlength="800" name="subtitulos" placeholder="Archivo de subtitulos de la obra" required></textarea>
            </div>
        </div>
        <!-- Fin: apartado de obra -->
        <div class="row mt-3">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>

@endsection
