<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $total =User::count();
        $users=User::orderBy('id','DESC')->paginate(5);
        return view('User.index',compact('users','total')); 
    }

    public function show($id){
        //return User::find($id);
        $user=User::find($id);
        return  view('user.show',compact('users'));
    }
    public function create()
    {
        //
        return view('User.create');
    }

    public function store(Request $request){
        //$this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required',  'costo'=>'required']);
        User::create($request->all());
        return redirect()->route('user.index')->with('success','Registro creado satisfactoriamente');
        //return User::create($request->all());
    }

    public function edit($id)
    {
        //
        $user=User::find($id);
        return view('user.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user=User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success','Registro actualizado satisfactoriamente');
    }

/*    public function delete(Request $request,$id){
        $user=User::findOrFail($id);
        $user->delete();
        return 204;
    }
*/
    public function destroy($id)
    {
        //
         User::find($id)->delete();
        return redirect()->route('user.index')->with('success','Registro eliminado satisfactoriamente');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    
    public function import() 
    {
        return Excel::import(new UsersImport, 'users.xlsx');
    }

}
