<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome2');
});

Route::get('/home', function () {
    return view('homepage');
});

//Vistas generales - Pagina principal.
Route::get('/homepage', function () {
    return view('homepage');
});

//Vistas generales - Acerca de nosotros.
Route::get('/about_us', function () {
    return view('aboutus');
});

//Vistas generales - Acerca de nosotros.
Route::get('/contact_us', function () {
    return view('contactus');
});

//Vistas restringidas - Encuestas. Solo se pueden ver si estan loggeados.
Route::middleware('auth')->group(function (){

    //Vistas restringidas - Encuestas.
    Route::get('/survey', function () {
        return view('survey');
    });

    //Vistas restringidas - Reporte de las respuestas y los puntos.
    Route::get('/report/{id}/show', [App\Http\Controllers\MainController::class, 'show'])->name('show');

    //Vistas restringidas - Reporte del desglose de puntos.
    Route::get('/breakdown', function () {
        return view('breakdown');
    });

    //Vistas de la encuesta para editar/sobrescribir información.
    //--Mains.
    Route::get('/mains/{id}/edit', [App\Http\Controllers\MainController::class, 'edit'])->name('edit');
    Route::put('/mains/{id}', [App\Http\Controllers\MainController::class, 'update'])->name('update');

    //--Companies.
    Route::get('/companies/{id}/edit', [App\Http\Controllers\CompanyController::class, 'edit'])->name('edit');
    Route::put('/companies/{id}', [App\Http\Controllers\CompanyController::class, 'update'])->name('update');

    //--Cleanings.
    Route::get('/cleanings/{id}/edit', [App\Http\Controllers\CleaningController::class, 'edit'])->name('edit');
    Route::put('/cleanings/{id}', [App\Http\Controllers\CleaningController::class, 'update'])->name('update');

    //--Distributions.
    Route::get('/distributions/{id}/edit', [App\Http\Controllers\DistributionController::class, 'edit'])->name('edit');
    Route::put('/distributions/{id}', [App\Http\Controllers\DistributionController::class, 'update'])->name('update');

    //--Interactions.
    Route::get('/interactions/{id}/edit', [App\Http\Controllers\InteractionController::class, 'edit'])->name('edit');
    Route::put('/interactions/{id}', [App\Http\Controllers\InteractionController::class, 'update'])->name('update');

    //--Strategies.
    Route::get('/strategies/{id}/edit', [App\Http\Controllers\StrategyController::class, 'edit'])->name('edit');
    Route::put('/strategies/{id}', [App\Http\Controllers\StrategyController::class, 'update'])->name('update');

});

/*Vistas generales - Encuestas.
Route::get('/breakdown', function () {
    return response()->download('report/1/show');
}); */

/*Vistas generales - Ver y descargar el reporte. *
Route::get('/report', function () {
    return view('report');
}); */

//Route::get('/mains', 'MainController@index');
Route::get('/mains', [App\Http\Controllers\MainController::class, 'index']);

//Mains
Route::get('/mains/create', [App\Http\Controllers\MainController::class, 'create']);
Route::post('/mains', [App\Http\Controllers\MainController::class, 'store']);

//Companies
Route::get('/companies/create', [App\Http\Controllers\CompanyController::class, 'create']);
Route::post('/companies', [App\Http\Controllers\CompanyController::class, 'store']);

//Cleanings
Route::get('/cleanings/create', [App\Http\Controllers\CleaningController::class, 'create']);
Route::post('/cleanings', [App\Http\Controllers\CleaningController::class, 'store']);

//Distributions
Route::get('/distributions/create', [App\Http\Controllers\DistributionController::class, 'create']);
Route::post('/distributions', [App\Http\Controllers\DistributionController::class, 'store']);

//Interactions
Route::get('/interactions/create', [App\Http\Controllers\InteractionController::class, 'create']);
Route::post('/interactions', [App\Http\Controllers\InteractionController::class, 'store']);

//Strategies
Route::get('/strategies/create', [App\Http\Controllers\StrategyController::class, 'create']);
Route::post('/strategies', [App\Http\Controllers\StrategyController::class, 'store']);


//Route::get('/report/{id}/show', [App\Http\Controllers\CleaningController::class, 'show'])->name('show');


//Route::get('/companies', 'CompanyController@index');
//Route::get('/cleanings', 'CleaningController@index');
//Route::get('/distributions', 'DistributionController@index');
//Route::get('/interactions', 'InteractionController@index');
//Route::get('/strategies', 'StrategyController@index');

Auth::routes();
