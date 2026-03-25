<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        $name = 'Dvd';
        $habitos = ['ler', 'Orar', 'trabalhar', 'Atividade física'];

        return view('home', [
            'name' => $name,
            'habitos' => $habitos
        ]);
    }
}
