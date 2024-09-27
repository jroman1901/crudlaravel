<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>@yield('title', 'CRUD Empleados')</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="{{ route('empleados.index') }}">CRUD Empleados</a>
      <div class="justify-end">
        <div class="col">
          <a class="btn btn-sm btn-success" href="{{ route('empleados.create') }}">Agregar Empleado</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    @yield('content')
  </div>

  <footer class="text-center mt-5">
    <p>&copy; {{ date('Y') }} CRUD Empleados</p>
  </footer>
</body>
</html>
