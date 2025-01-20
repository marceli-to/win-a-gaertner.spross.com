<?php
use Illuminate\Support\Facades\Route;
use App\Models\Participant;

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

Route::view('/', 'home')->name('page.home');
Route::view('/wettbewerb', 'competition')->name('page.competition');
Route::view('/teilnahmebedingungen', 'conditions')->name('page.conditions');

Route::get('/vielen-dank/{uuid}', function ($uuid) {
  $participant = Participant::where('uuid', $uuid)->first();
  return view('thanks', ['participant' => $participant]);
})->name('page.thanks');

Route::get('/email/bestaetigen/{uuid}', function ($uuid) {
  $participant = Participant::where('uuid', $uuid)->first();
  if ($participant) {
    $participant->update(['email_verified_at' => now()]);
    return redirect()->route('page.thanks', [$participant->uuid]);
  }
})->name('page.verify');

Route::view('/dashboard', 'dashboard')->name('page.dashboard');

