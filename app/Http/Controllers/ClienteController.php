<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        //
        $clientes=Cliente::orderBy('id','DESC')->paginate(3);
        return view('Cliente.index',compact('clientes')); 
    }

    public function create()
    {
        //
        return view('Cliente.create');
    }

    public function store(Request $request)
    {
                //$this->validate($request,[ 'nombre'=>'required', 'apellidos'=>'required', 'celular'=>'required', 'dni'=>'required', 'sexo'=>'required']);
        Cliente::create($request->all());
        return redirect()->route('cliente.index')->with('success','Registro creado satisfactoriamente');
    }

    public function show($id)
    {
        $clientes=Cliente::find($id);
        return  view('cliente.show',compact('clientes'));
    }

  
    public function edit($id)
    {
        //
        $cliente=cliente::find($id);
        return view('cliente.edit',compact('cliente'));
    }

  
    public function update(Request $request, $id)    {
        $cliente=Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('cliente.index')->with('success','Registro actualizado satisfactoriamente');

    }

    public function destroy($id)
    {
        //
        Cliente::find($id)->delete();
        return redirect()->route('cliente.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

