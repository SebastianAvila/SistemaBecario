<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\BecarioController;
use App\Http\Controllers\PlantelController;
use App\Http\Controllers\ProgramaController; 
use Illuminate\Support\Facades\View;


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

Route::get('/', function () {
    return view('index');
});



Route::resource('alumno', AlumnoController::class);

Route::resource('becarios', BecarioController::class);

Route::resource('planteles', PlantelController::class);

Route::resource('programas', ProgramaController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

if(View::exists('seleccionAdmin')){
    Route::view('/seleccionAdmin' , 'seleccionAdmin');
}else{
    echo('La vista solicitada no existe "selccionAdmin"');
}


