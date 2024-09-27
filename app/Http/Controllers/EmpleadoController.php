<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
   
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index',compact('empleados'));

    }

  
    public function create(Request $resquest)
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:255',
            'direccion'=>'required|max:200',
            'telefono'=>'required|max:10'
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index')
        ->with('success','Datos acualizados correctamente');


    }

  
    public function show(string $id)
    {
        $empleados = Empleado::find($id);
        return view('empleados.show',compact('empleados'));
    }

    public function edit(string $id)
    {
        $empleado = Empleado::findOrFail($id);
          return view('empleados.edit', compact('empleado')); 
    }

   
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre'=>'required|max:255',
            'direccion'=>'required|max:200',
            'telefono'=>'required|max:10'
        ]);
   

        $empleados = Empleado::find($id);
        $empleados->update($request->all());
        return redirect()->route('empleados.index')
         ->with('success','Registro acualizado con exito');


    }

   
    public function destroy(string $id)
    {
        $empleados = Empleado::find($id);
        $empleados->delete();
        return redirect()->route('empleados.index')
        ->with('success','Empleado eliminado con exito');

    }
}