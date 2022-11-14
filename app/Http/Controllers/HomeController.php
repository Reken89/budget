<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//use App\Structure\UserSection\Auth\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {       
        $role = Auth::user()->role();
        return view('home', ['role' => $role]);
    }
}
