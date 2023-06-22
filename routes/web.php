<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KorisnikController;
use Faker\Guesser\Name;
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

Route::get('/', [KorisnikController::class, 'pocetna'] )->name('pocetna');

Route::get('/dogadjaji', [KorisnikController::class, 'dogadjaji'] )->name('dogadjaji');
Route::get('/dogadjaj/{id}', [KorisnikController::class, 'dogadjaj'] )->name('dogadjaj');
Route::get('/dodaj-dogadjaj', [AdminController::class, 'dodaj_dogadjaj_get'] )->name('dodaj-dogadjaj-get');
Route::post('/dodaj-dogadjaj', [AdminController::class, 'dodaj_dogadjaj_post'] )->name('dodaj-dogadjaj-post');
Route::get('/obrisi-dogadjaj/{id}', [AdminController::class, 'obrisi_dogadjaj'] )->name('obrisi-dogadjaj');

Route::get('/rezervacija', [KorisnikController::class, 'rezervacija_get'] )->name('rezervacija-get');
Route::post('/rezervacija', [KorisnikController::class, 'rezervacija_post'] )->name('rezervacija-post');
Route::get('/rezervacija-bez/{id}', [KorisnikController::class, 'rezervacija_bez_dogadjaja_get'] )->name('rezervacija-bez-get');
Route::post('/rezervacija-bez{id}', [KorisnikController::class, 'rezervacija_bez_dogadjaja_post'] )->name('rezervacija-bez-post');

Route::get('/kreirane-rezervacije', [AdminController::class, 'kreirane_rezervacije'] )->name('kreirane-rezervacije');
Route::get('/prihvati-rezervaciju/{id}', [AdminController::class, 'prihvati_rezervaciju'] )->name('prihvati-rezervaciju');
Route::get('/odbij-rezervaciju/{id}', [AdminController::class, 'odbij_rezervaciju'] )->name('odbij-rezervaciju');

Route::get('/obradjene-rezervacije', [AdminController::class, 'obradjene_rezervacije'] )->name('obradjene-rezervacije');
Route::get('/obrisi-rezervaciju/{id}', [AdminController::class, 'obrisi_rezervaciju'] )->name('obrisi-rezervaciju');

Route::get('/kontakt', [KorisnikController::class, 'kontakt_get'] )->name('kontakt-get');
Route::post('/kontakt', [KorisnikController::class, 'kontakt_post'] )->name('kontakt-post');
