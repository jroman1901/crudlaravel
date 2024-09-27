@extends('layouts.layout')
@section('title', 'Crear Empleados')

@section('content')
<div class="row">

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}" required>
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Crear Empleado</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
      </form>
    </div>
  </div>

</div>

@endsection