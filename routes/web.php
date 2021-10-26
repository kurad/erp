<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ChampionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/login/master', [LoginController::class, 'showMasterLoginForm']);
Route::get('/login/champion', [LoginController::class,'showChampionLoginForm']);
Route::get('/register/master', [RegisterController::class,'showMasterRegisterForm'])->name('masterregister');
Route::get('/register/champion', [RegisterController::class,'showChampionRegisterForm'])->name('championregister');
Route::get('/discussion/master', [MasterController::class,'discussion'])->name('discussion');

Route::post('/login/master', [LoginController::class,'masterLogin'])->name('masterlogin');
Route::post('/login/champion', [LoginController::class,'championLogin'])->name('championlogin');
Route::post('/register/master', [RegisterController::class,'createMaster']);
Route::post('/register/champion', [RegisterController::class,'createChampion']);


Route::group(['middleware' => 'auth:champion'], function () {
    Route::view('/champion', 'champion');
});

Route::group(['middleware' => 'auth:master'], function () {
    
    Route::view('/master', 'master');
    //Route::view('/discussion','discussion');
    Route::get('discussion',[MasterController::class,'discussion'])->name('discussion');
});

Route::get('logout', [LoginController::class,'logout']);

Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    Route::get('/home', 'HomeController@index');
  });

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix'=>'master','middleware'=>['isMaster','auth']],function(){
        Route::get('dashboard',[MasterController::class,'index'])->name('master.dashboard');
        Route::get('profile',[MasterController::class,'profile'])->name('master.profile');
        Route::get('setting',[MasterController::class,'settings'])->name('master.settings');
});

Route::group(['prefix'=>'champion','middleware'=>['isChampion','auth']],function(){
    Route::get('dashboard',[ChampionController::class,'index'])->name('champion.dashboard');
    Route::get('profile',[ChampionController::class,'profile'])->name('champion.profile');
    Route::get('setting',[ChampionController::class,'settings'])->name('champion.settings');
});
