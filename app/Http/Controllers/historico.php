<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;



class historico extends Controller
{

    public function show (Request $request){
        /*$solicitacao = Solicitacao::with(['id_setor', 'id'])->get();*/

        //$solicitacao = Solicitacao::all();
        
        //$solicitacao = setores::find(1)->solicitacao;
        $solicitacao = Solicitacao::with('setores')->get();

       // $setores = setores::with('solicitacao')->first();

        //$solicitacao = $setores->solicitacao;

       //$solicitacao = Solicitacao::where('id', $setores)->first();
       
        return view ('historico', ['solicitacao' => $solicitacao]);
        
    }
    
    /*public function setores(){

        return $this->belongsTo( related:Setores::class);
    }*/
}
