<!-- resources/views/empleados/index.blade.php -->
@extends('layouts.layout')
@section('title', 'Lista de Empleados')

@section('content')
  <div class="row">
      <!-- Mostrar el mensaje flash de éxito si existe -->
      @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
    <div class="col-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($empleados as $empleado)
            <tr>
              <td>{{ $empleado->id }}</td>
              <td>{{ $empleado->nombre }}</td>
              <td>{{ $empleado->direccion }}</td>
              <td>{{ $empleado->telefono }}</td>
              <td>
                <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary btn-sm">Editar</a>
                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection