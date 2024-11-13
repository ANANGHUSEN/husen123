<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller extends Controller
{
    /**
     * Buat instance baru dari controller.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Tampilkan halaman dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
