<?php

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

Route::middleware(['guest'])->get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/members', function(){
        return view('members.index')
            ->withMembers(\App\Models\User::paginate());
    })->name('members.index');
    Route::get('/members/{user}', function(\App\Models\User $user){
        return view('members.show')
            ->withMember($user);
    })->name('members.show');
    Route::post('/members/{user}/follow', function(\App\Models\User $user){
        \Illuminate\Support\Facades\Auth::user()->follow($user);
        return redirect()->route('members.show', $user);
    })->name('members.follow');
    Route::post('/members/{user}/unfollow', function(\App\Models\User $user){
        \Illuminate\Support\Facades\Auth::user()->unfollow($user);
        return redirect()->route('members.show', $user);
    })->name('members.unfollow');

});
