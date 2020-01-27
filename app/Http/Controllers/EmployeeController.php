<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmployeeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function ShowEmployees(){

        $users = User::all();
        return view('employees', compact('users'));
    }
}
