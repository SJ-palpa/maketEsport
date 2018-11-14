<?php

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
    return view('home');
});
Route::get('/mobile', function () {
    return view('home');
});
Route::get('/appliweb', function () {
    return view('home');
});



Route::get('/utilisateur/mobile', function () {
    return view('utilisateur');
});
Route::get('/utilisateur/appliweb', function () {
    return view('utilisateur');
});




Route::get('/administrateurEvenement/mobile', function () {
    return view('administrateurEvenement');
});
    Route::get('/administrateurEvenement/mobile/enregistrerJoueur', function () {
        return view('administrateurEvenement');
    });


Route::get('/administrateurEvenement/appliweb', function () {
    return view('administrateurEvenement');
});
    Route::get('/administrateurEvenement/appliweb/enregistrerJoueur', function () {
        return view('administrateurEvenement');
    });
    Route::get('/administrateurEvenement/appliweb/listevenement', function () {
        return view('administrateurEvenement');
    });




Route::get('/administrateurSESF', function () {
    return view('administrateurSESF');
});
    Route::get('/administrateurSESF/enregistrerAdminEvenement', function () {
        return view('administrateurSESF');
    });

