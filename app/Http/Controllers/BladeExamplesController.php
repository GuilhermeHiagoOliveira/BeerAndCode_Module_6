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

        $users = [
            ['id' => 1, 'name' => 'Guilherme'],
            ['id' => 2, 'name' => 'João'],
            ['id' => 3, 'name' => 'Maria'],
            ['id' => 4, 'name' => 'José'],
        ];

        $users2 = [];

        $count = 0;

        return view('index', [
            'user' => $user,
            'users' => $users,
            'count' => $count,
            'users2' => $users2
        ]);
    }
}
