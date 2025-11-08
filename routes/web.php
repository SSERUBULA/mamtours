<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Main;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    $user = auth()->user();         // get authenticated user

    if ($user && $user->is_admin) {
        $mains = main::latest()->paginate(10);
        return view('dashboard', compact('mains'));
    }

    return view('dashboard');
})->middleware('auth')->name('dashboard');


require __DIR__.'/auth.php';

Route::middleware(['auth','is_admin'])->group(function () {
    Route::get('/display', [MainController::class, 'mains'])->name('mains.display');
});
Route::get('/home',[MainController::class,'home']);
Route::get('/contactus',[MainController::class,'contactus'])->name('contactus');
Route::get('/aboutus',[MainController::class,'aboutus']);
Route::post('/dashboard',[MainController::class,'store'])->name('dashboard.store');
Route::delete('/delete/{id}',[MainController::class,'destroy'])->name('mains.destroy');
Route::get('/edit/{id}',[MainController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[MainController::class,'update'])->name('update');