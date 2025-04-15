<?php

use Illuminate\Support\Facades\Route;
use App\Models\Persona;

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/personas', function () {
    $personas = Persona::all();
    return view('personas.index', compact('personas'));
});
*/
use App\Http\Controllers\PersonaWebController;

Route::get('/personas', [PersonaWebController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonaWebController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonaWebController::class, 'store'])->name('personas.store');
Route::get('/personas/{persona}/edit', [PersonaWebController::class, 'edit'])->name('personas.edit');
Route::put('/personas/{persona}', [PersonaWebController::class, 'update'])->name('personas.update');
Route::delete('/personas/{persona}', [PersonaWebController::class, 'destroy'])->name('personas.destroy');
