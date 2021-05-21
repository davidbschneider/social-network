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

    // Members
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

    // Groups
    Route::get('/groups', function(){
        return view('groups.index')
            ->withGroups(\App\Models\Team::paginate());
    })->name('groups.index');
    Route::get('/groups/{team}', function(\App\Models\Team $team){
        return view('groups.show')
            ->withGroup($team);
    })->name('groups.show');
    Route::get('/groups/{team}/members', function(\App\Models\Team $team){
        return view('groups.members')
            ->withGroup($team);
    })->name('groups.members');
    Route::post('/groups/{team}/join', function(\App\Models\Team $team){
        $team->users()->attach([Auth::id()]);
        return redirect()->route('groups.show', $team);
    })->name('groups.join');
    Route::post('/groups/{team}/leave', function(\App\Models\Team $team){
        $team->users()->detach([Auth::id()]);
        return redirect()->route('groups.show', $team);
    })->name('groups.leave');

});
