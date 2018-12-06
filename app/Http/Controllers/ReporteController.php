<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reporte;
use App\Mantenimiento;
use App\Cliente;
use DB;

class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        /*$reportes=DB::collection('Reportes')
        ->join('Mantenimientos','Mantenimientos.id','=','Reportes.idm')
        ->select('*','Mantenimientos.costo AS cos')
        ->get();
        */

        //$reportes=DB::collection('Reportes')->get();

        //dd($reportes);
        
        //$reportes=DB::collection('Reportes')->get();

        //$reportes = DB::collection('Reportes')->where('idm', 3)->first();

        //$reportes = Reporte::all();
        //$reportes = Reporte::find('517c43667db388101e00000f');
        //$reportes = Reporte::orderBy('idR', 'desc')->get();
        $reportes=Reporte::orderBy('id')->paginate(5);
        $clientes=Cliente::all();
        $mantenimientos=Mantenimiento::all();
        
        return view('Reporte.index',compact('reportes','mantenimientos','clientes')); 
        //dd($reportes);
    }

    public function show($id){
        //return Reporte::find($id);
        $reporte=Reporte::find($id);
        return  view('reporte.show',compact('reportes'));
    }
    public function create()
    {
        //
        $clientes=Cliente::all();
        return view('Reporte.create',compact('clientes'));
    }

    public function store(Request $request){
        //$this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required',  'costo'=>'required']);
        Reporte::create($request->all());
        return redirect()->route('reporte.index')->with('success','Registro creado satisfactoriamente');
        //return Reporte::create($request->all());
    }

    public function edit($id)
    {
        //
        $author = $book->author;
        $author->name = 'Jane Doe';
        $author->save();

        $reporte=Reporte::find($id);
        return view('reporte.edit',compact('reporte'));
    }

    public function update(Request $request,$id){
        
       

        $reporte=Reporte::findOrFail($id);
        $reporte->update($request->all());
        return redirect()->route('reporte.index')->with('success','Registro actualizado satisfactoriamente');
    }

/*    public function delete(Request $request,$id){
        $reporte=Reporte::findOrFail($id);
        $reporte->delete();
        return 204;
    }
*/
    public function destroy($id)
    {
        //
         Reporte::find($id)->delete();
        return redirect()->route('reporte.index')->with('success','Registro eliminado satisfactoriamente');
    }

    public function getLibros(){
        $libros=Libro::all();
        return response()->json($libros);
    }
}

