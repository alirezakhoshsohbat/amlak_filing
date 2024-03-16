<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    $emails = [
        ['senderName'=>'حسن مرادی','link' => '#', 'avatar' => 'https://via.placeholder.com/140x140', 'timeFromNow' => '10 دقیقه قبل', 'emailTitle' => 'رهن و اجاره'],
        ['senderName'=>'حسن مرادی','link' => '#', 'avatar' => 'https://via.placeholder.com/140x140', 'timeFromNow' => '10 دقیقه قبل', 'emailTitle' => 'رهن و اجاره'],
        ['senderName'=>'حسن مرادی','link' => '#', 'avatar' => 'https://via.placeholder.com/140x140', 'timeFromNow' => '10 دقیقه قبل', 'emailTitle' => 'رهن و اجاره'],
        ['senderName'=>'وحید احمدی','link' => '#', 'avatar' => 'https://via.placeholder.com/140x140', 'timeFromNow' => '11 دقیقه قبل', 'emailTitle' => 'خرید و فروش'],
        ['senderName'=>'حسن غفاری','link' => '#', 'avatar' => 'https://via.placeholder.com/140x140', 'timeFromNow' => '44 دقیقه قبل', 'emailTitle' => 'تهاتر']
    ];

    return view('dashboard', ['emails' => $emails]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
