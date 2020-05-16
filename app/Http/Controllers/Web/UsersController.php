<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users =  User::orderBy('name', 'asc')->paginate(10);

        return view('admin.master.user.index', compact('users'));

       //dd($users); sama seperti var_dump pada php
    }
}
