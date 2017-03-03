<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function clean()
    {
        shell_exec('php artisan migrate:refresh --seed');
        return back();
    }
    public function reiniciasorteo()
    {
        Pregunta::where('sorteado',true)->update(['sorteado'=>false]);
        Alert::success('Sorteo reiniciado');
        return back();
    }
}
