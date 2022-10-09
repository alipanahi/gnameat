<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    if (Auth::check()) {
        if(Auth::user()['type']=='normal'){
            $data = User::find(Auth::id())->points;
            return view('dashboard',['data'=>$data]);
        }else{
            return view('admin-dashboard');
        }
    }else{
        return view('home');
    }
})->name('/');

Route::get('/dashboard', function () {
    if(Auth::user()['type']=='normal'){
        $data = User::find(Auth::id())->points;
        return view('dashboard',['data'=>$data]);
    }else{
        return view('admin-dashboard');
    }
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/privacy_policy', function () {
    return view('privacy');
})->name('privacy');
