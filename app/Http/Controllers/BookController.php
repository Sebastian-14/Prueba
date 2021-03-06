<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Relations\EmbedsOne;

use App\Book;

use App\author;

use DB;

class BookController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function author()
    {

        return $this->embedsOne('author');
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

        //$reportes=Reporte::orderBy('id')->paginate(5);
        //return view('Reporte.index',compact('reportes')); 
        //dd($reportes);

        //$author=Book::first()->author;
        //$author=DB::collection('Book')->get();
        
        /*$author=new Author(['name'=>'John Doe']);
        
        $book=Book::first();
        
        $author=$book->author()->save($author);
        */
        //$book=Book::first();
        //$author = Book::first()->author;
        //$author=DB::collection('Book')->get();
        //DB::table('Book')->increment('idb');
        //$collection=$author;
        //*********************************************+
        /*$author=DB::collection('Book')
                ->where('name', 'libro 2')
                ->get();
        */
        /*DB::collection('Book')->insert(
            [`"author.name"`=> 'b']
        );
*/

//$author = Book::first()->author;
//$book = Book::first();
//$book = author::first()->name;
//$author = $book->author;
//$author = $book->author()->create(['name' => 'John Doe']);

//$book = $author->books()->first();

//$book->name = 'A Game of Thrones';

//$book->save();

//*****************************+
//$author=DB::collection('Book')
  //              ->where('name', 'libro 2')
    //            ->get();


$author = new author(['name' => 'Jane']);

$book = Book::first();

$author = $book->author()->save($author);

//$book = Book::collection('Book');


$author= DB::collection('Book')->get();

//$author = Book::first()->author;
        //dd($author);

//$author = Book::first()->author;
//$author = $book->author()->create(['name' => 'John Doe']);
dd($author);
        
        
        
    }
/*
    public function show($id){
        //return Reporte::find($id);
        $reporte=Reporte::find($id);
        return  view('reporte.show',compact('reportes'));
    }
    public function create()
    {
        //
        //return view('Reporte.create');

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
*/
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
