<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;

class TracksController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function show(){
        $tracks = Track::orderBy('builder')->get();
        return view('tracks', compact('tracks'));
    }

    public function create(){
        return view('create-track');
    }

    public function store(){

        $data = request()->validate([
            'builder' => 'required',
            'neighborhood' => 'required',
            'shorthand' => 'required',
            'cross_street' => 'required',
            'lot_count' => 'required'
        ]);

        Track::create($data);

        return redirect('/tracks');

    }
}
