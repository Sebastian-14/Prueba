<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;
use App\Cliente;

class AutoController extends Controller
{
    
    public function index()
    {
        //
        //$autos=Auto::orderBy('id','DESC')->paginate(3);
        $autos=Auto::all();
        $clientes=Cliente::all();
        return view('Auto.index',compact('autos','clientes')); 
    }

    public function create()
    {
        //
        $clientes=Cliente::all();
        return view('Auto.create',compact('clientes'));
    }

    public function store(Request $request)
    {
        $clientes=Cliente::all();
                //$this->validate($request,[ 'nombre'=>'required', 'apellidos'=>'required', 'celular'=>'required', 'dni'=>'required', 'sexo'=>'required']);
        Auto::create($request->all());
        return redirect()->route('auto.index')->with('success','Registro creado satisfactoriamente');
    }

    public function show($id)
    {
        $autos=Auto::find($id);
        return  view('auto.show',compact('autos'));
    }

  
    public function edit($id)
    {
        //
        $clientes=Cliente::all();
        $auto=auto::find($id);
        return view('auto.edit',compact('auto','clientes'));
    }

  
    public function update(Request $request, $id)    {
        $auto=Auto::findOrFail($id);
        $auto->update($request->all());
        return redirect()->route('auto.index')->with('success','Registro actualizado satisfactoriamente');

    }

    public function destroy($id)
    {
        //
        Auto::find($id)->delete();
        return redirect()->route('auto.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

