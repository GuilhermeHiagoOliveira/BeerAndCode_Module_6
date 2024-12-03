<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $user = [
            'id' => 2,
            'admin' => false,
            'name' => "Guilherme Oliveira",
            'biography' => "
                <p>Nome: <strong>Guilherme Oliveira</strong></p><br/>
                <p>Idade: <strong>26 anos</strong></p><br/>
                <p>Cidade Natal: <strong>Campinas - SP</strong></p><br/>
            "
        ];
        return view('index', [
            'user' => $user
        ]);
    }
}
