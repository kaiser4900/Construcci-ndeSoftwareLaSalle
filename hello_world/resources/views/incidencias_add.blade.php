@extends ('plantilla')

@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@section ('seccion')
<h1>Agregar Nueva Incidencia</h1>
<form action="{{route('incidencia.crear')}}" method="POST">
    @csrf
    <input type="text" name="email" placeHolder="Email" class="form-control mb-2">
    <input type="text" name="tema" placeHolder="Tema" class="form-control mb-2">
    <input type="text" name="detalle" placeHolder="Detalle" class="form-control mb-2">
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection