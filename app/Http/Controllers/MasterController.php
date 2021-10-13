<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\Master;
use App\Models\Champion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MasterController extends Controller
{
    function index(){
        return view('dashboards.master.index');
    }
    function profile(){
        return view('dashboards.master.profile');
    }
    function discussion(){
        $discussions = Discussion::all();
        return view('masters.pages.discussion',compact('discussions'));
    }
}
