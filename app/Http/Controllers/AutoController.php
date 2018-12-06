<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class AutoController extends Controller
{
    
    public function index()
    {
        //
        $autos=Auto::orderBy('id','DESC')->paginate(3);
        return view('Auto.index',compact('autos')); 
    }

    public function create()
    {
        //
        return view('Auto.create');
    }

    public function store(Request $request)
    {
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
        $auto=auto::find($id);
        return view('auto.edit',compact('auto'));
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

