<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mantenimiento;
use App\Reporte;
use DB;

class MantenimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){

        //$mantenimientos = DB::collection('Mantenimientos')->get();
        //$mantenimientos = DB::table('Mantenimientos')->where('nombre', 'ejemplo')->first();
        /*$mantenimientos =DB::table('Mantenimiento')
            ->join('Reportes', 'Mantenimientos.idM', '=', 'Reportes.Mantenimiento_id')
            //->join('Mantenimiento', 'users.id', '=', 'orders.user_id')
            ->select('Mantenimientos.nombre AS prueba1', 'Reportes.fecha AS prueba2')
            ->get();
            
        */
        $reportes=Reporte::all();
        $var1 = Mantenimiento::where ('nombre','Mantenimiento 01')->sum('costo');
        //dd($mantenimientos);
        $mantenimientos = Mantenimiento::orderBy('nombre','desc')->get();
        $total = Mantenimiento::sum('costo');

        //$mantenimientos=Mantenimiento::orderBy('id')->paginate(5);
        
        return view('Mantenimiento.index',compact('mantenimientos','var1','reportes','total')); 
        
        
        //return view('Mantenimiento.index', ['mantenimientos' => $mantenimientos]);
    }

    public function show($id){
        //return Mantenimiento::find($id);
        $mantenimiento=Mantenimiento::find($id);
        //return  view('mantenimiento.show',compact('mantenimientos'));
        return view('mantenimiento.show')->with('mantenimiento',$mantenimiento);
        
            //$moneda=Moneda::find($id);
            //return view('moneda.show')->with('moneda',$moneda);
        
    }
    
    public function create()
    {
        //
        return view('Mantenimiento.create');
    }

    public function store(Request $request){
        //$this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required',  'costo'=>'required']);
        Mantenimiento::create($request->all());
        return redirect()->route('mantenimiento.index')->with('success','Registro creado satisfactoriamente');
        //return Mantenimiento::create($request->all());
    }

    public function edit($id)
    {
        //
        $mantenimiento=Mantenimiento::find($id);
        return view('mantenimiento.edit',compact('mantenimiento'));
    }

    public function update(Request $request,$id){
        $mantenimiento=Mantenimiento::findOrFail($id);
        $mantenimiento->update($request->all());
        return redirect()->route('mantenimiento.index')->with('success','Registro actualizado satisfactoriamente');
    }

/*    public function delete(Request $request,$id){
        $mantenimiento=Mantenimiento::findOrFail($id);
        $mantenimiento->delete();
        return 204;
    }
*/
    public function destroy($id)
    {
        //
         Mantenimiento::find($id)->delete();
        return redirect()->route('mantenimiento.index')->with('success','Registro eliminado satisfactoriamente');
    }

}

