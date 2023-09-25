<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//b- Routing simple

Route::get('/page1', function () {
    return '<h1>my first page</h1>';
});
//Routing paramétrés
Route::get('/page2/{nom}', function ($nom) {
    return "<h1>Welcome $nom</h1>";
});

Route::get('/message/{nom}/{id}', function ($nom, $id) {
    return "Message pour $nom avec l'ID $id";
});
//d- Routing paramétrés optionnel
Route::get('/page3/{nom?}', function ($nom = null) {
    if ($nom) {
        return "Welcome $nom";
    } else {
        return "Welcome";
    }
});

//e)Contraintes sur les lettres
Route::get('/page4/{nom}', function ($nom) {
    return "Welcome $nom";
})->where('nom', '[A-Za-z]+');
//f)Contraintes sur les chiffres

Route::get('/message/{id}', function ($id) {
    return "Message avec l'ID $id";
})->where('id', '[0-9]+');
//controller

Route::get('/welcome', [HomeController::class, 'welcomePage']);

Route::get('/5twin', [HomeController::class, 'Hello5twin']);
Route::get('/home', [HomeController::class, 'show']);



Route::get('/formulaire', function () {
    return view('form');
})->name('traiterFormulaire');

Route::post('/traiter-formulaire', 'FormController@traiterFormulaire')->name('traiterFormulaire');

Route::get('/pagereservee', function () {
    return "Ceci est une page réservée aux personnes de plus de 18 ans.";
})->middleware('verif.age');