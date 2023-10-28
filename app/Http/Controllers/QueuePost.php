<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Jobs\Teste;


class QueuePost extends Controller
{
    public function index(Request $request)
    {
        return view('teste.step')->with('edital', $request->edital);
    }

    public function cadastro(Request $request)
    {
        $data = array();
        $data['titulo'] = $request->titulo;
        $data['mensagem'] = $request->mensagem;
        $job = new Teste($data);
        // Configura x time
        // $job = (new Teste($data))->delay(60);
        dispatch($job);
        return view('teste.step')->with('edital', $request->edital);
    }
}
