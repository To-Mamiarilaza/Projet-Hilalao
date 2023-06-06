<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FOC\LoginController;
use App\Http\Controllers\FOC\CustomerController;

Route::POST('/SignIn', [LoginController::class,
    'login'])->name('SignIn');


Route::GET('/SignInAccount', [LoginController::class,
'signup'])->name('SignInAccount');


Route::get('/', function () {
    return view('FOC/login');
});

Route::get('/signUp', [LoginController::class, 'signUp'])
->name('signUp');

Route::post('/signUpCin', [LoginController::class, 'signUpCin'])
->name('signUpCin');

Route::POST('/login', [LoginController::class, 'login'])
->name('login');
