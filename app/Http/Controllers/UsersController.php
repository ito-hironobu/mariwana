<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
      return view('users.index');
    }

    public function login() {
      return view('users.login');
    }

    public function register() {
      return view('users.register');
    }
}
