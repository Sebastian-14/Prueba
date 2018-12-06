<?php
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\ClientesExport;
use App\Exports\MantenimientosExport;
use App\User;
use App\Mantenimiento;
use App\Cliente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::group(['middleware' => ['auth','admin'],'prefix'=>'admin'], function() {
    Route::resource('mantenimiento', 'admin\MantenimientoController');
    //Route::get('api/v1/mantenimientos','admin\MantenimientoController@getMantenimientos');
    Route::get('/',function(){
        return view('mantenimiento.index');
    });
    
});
*/

/*Route::group(['middleware' =>'admin'], function() {
    Route::resource('mantenimiento', 'MantenimientoController');
    Route::get('api/v1/mantenimientos','MantenimientoController@getMantenimientos');
});
*/
/*
Route::get('/',function(UsersExport $usersExport){
    return $usersExport->store('users.xlsx','dx');
});
*/
Route::get('pdf',function(){
    $users=App\Cliente::all();
    $pdf=PDF::loadView('cliente.index',['clientes'=>$users]);
    //$pdf=PDF::loadview('vista');
    return $pdf->download('a.xlsx');
});


/*
//Si FUNCIONAAAA DX
Route::get('/',function(){
    return Excel::download(new MantenimientosExport,'ejs.pdf');
});
*/

/*
Route::get('/',function(){
    return Excel::download(new ClientesExport,'ejs.xlsx');
});
*/

Route::resource('auto','AutoController');
Route::get('api/v1/autos','AutoController@getAutos');

Route::resource('cliente', 'ClienteController');
Route::get('api/v1/clientes','ClienteController@getClientes');

Route::resource('Book', 'BookController');

Route::resource('mantenimiento', 'MantenimientoController');
Route::get('api/v1/mantenimientos','MantenimientoController@getMantenimientos');

Route::resource('user', 'UserController');
Route::get('api/v1/users','UserController@getUsers');

Route::resource('reporte', 'ReporteController');
Route::get('api/v1/reportes','ReporteController@getReportes');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

