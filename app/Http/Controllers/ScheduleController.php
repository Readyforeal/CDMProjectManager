<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\User;

class ScheduleController extends Controller
{
    
    public function index(){
        return view('schedule');
    }

    public function create(){

        $tracks = Track::orderBy('shorthand')->get();
        $users = User::orderBy('name_first')->get();

        return view('create-schedule', compact('tracks', 'users'));
    }

}
