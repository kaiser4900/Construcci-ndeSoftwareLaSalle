@extends('plantilla')

@section('seccion')
<h1 class="display-4">Incidencias</h1>
<a href="{{ route('incidencia.agregar') }}" class="btn btn-primary">Agregar nueva incidencia</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Email</th>
      <th scope="col">Tema</th>
      <th scope="col">Detalle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($incidencias as $incidencia)
    <tr>
      <th scope="row">{{$incidencia->id}}</th>
      <th scope="row">
        {{$incidencia->email}}
      </th>
      <th scope="row">
            {{$incidencia->tema}}
      </th>
      <th scope="row">
            {{$incidencia->detalle}}
        </th>
      <td>
        <form action="{{ route('incidencia.eliminar', $incidencia) }}" class="d-inline" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection