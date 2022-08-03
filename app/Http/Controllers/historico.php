<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;



class historico extends Controller
{

    public function show(Request $request)
    {
        /*$solicitacao = Solicitacao::with(['id_setor', 'id'])->get();*/

        //$solicitacao = Solicitacao::all();

        //$solicitacao = setores::find(1)->solicitacao;

        // $setores = setores::with('solicitacao')->first();

        //$solicitacao = $setores->solicitacao;

        //$solicitacao = Solicitacao::where('id', $setores)->first();

        $solicitacao = Solicitacao::with('setores')->get();

        return view('historico', ['solicitacao' => $solicitacao]);
    }
}
