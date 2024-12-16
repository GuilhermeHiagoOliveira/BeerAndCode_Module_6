<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $title = "Título do alerta";
        $message = "Mensagem do alerta";

        return view('index', [
            'title' => $title,
            'message' => $message
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|min:3'
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully');
    }
}
