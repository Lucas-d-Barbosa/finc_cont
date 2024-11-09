<?php

use App\Mail\MensagemTesteMail;
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
    return redirect()->route('receita.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mensage-teste', function(){
    // return new MensagemTesteMail();
    Mail::to('francisco.lucas.d.santos.barbosa@gmail.com')
        ->send(new MensagemTesteMail());
    return "Email enviado com sucesso!";
});



Route::middleware('auth')->prefix('/app')->group(function(){
    Route::resource('/receita', 'App\Http\Controllers\ReceitaController');

});