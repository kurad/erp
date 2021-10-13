<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionController extends Controller
{
    function index(){
        return view('dashboards.champion.index');
    }
    function profile(){
        return view('dashboards.champion.profile');
    }
    function dashboard(){
        return view('dashboards.champion.dashboard');
    }
}
