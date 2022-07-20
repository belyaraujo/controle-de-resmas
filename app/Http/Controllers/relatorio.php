<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setores;
use App\Models\Solicitacao;
use App\Models\RelatorioModel;
use PDF;


class relatorio extends Controller
{


    public function relatorio(Request $request){
        $setores = Setores::orderby('id')->get();
        
        
        if($request->id_setor){
         $solicitacao = Solicitacao::where('id_setor', '=', $request->id_setor)->get();
        }

        if($request->datainicial && $request->datafinal){
         $solicitacao = Solicitacao::whereBetween('created_at', '=', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59'])->get();
        }

        //dd($request['id_setor']);
      
        return view ('relatorio', compact ('setores'));
     }

     public function generatePDF(Request $request)
    {

      if($request->id_setor){
         $solicitacao = Solicitacao::where('id_setor', $request->id_setor);
        }

        if($request->datainicial && $request->datafinal){
         $solicitacao = Solicitacao::whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);
        }

        $solicitacao = Solicitacao::get();
        

  
        $relatorio = [
            'title' => 'Relatório',
            'date' => date('d/m/Y'),
            'solicitacao' => $solicitacao,
        ]; 
            
        $pdf = PDF::loadView('myPDF', $relatorio);
     
        return $pdf->stream('relatorio.pdf');
    }
  }

        //public function buscar($id_setor)
        //{

          //$solicitacao = solicitacao::find($id_setor);
          //$data = RelatorioModel::whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);
            
         
        //}

     // function data(Request $request){

    //$data = RelatorioModel::whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);

   //  }

