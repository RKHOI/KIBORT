<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kibort;
use App\Models\pembeli;


class UserController extends Controller
{
    public function index()
    {
        return view('index', compact('data'));
    }

    public function home()
    {
        return view('home');
    }

    public function login() {
        return view('login');
    }

    public function pembeli()
    {
        return view('pembeli');
    }
}
