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
        

         $solicitacao = Solicitacao::where('id_setor', '=', $request->id_setor)
         ->whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);
        

        /*if($request->datainicial && $request->datafinal){
         $solicitacao = Solicitacao::whereBetween('created_at', '=', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59'])->get();
        }*/

        //dd($request['id_setor']);
      
        return view ('relatorio', compact ('setores'));
     }

    public function show(Request $id_setor){
      
      //$id_setor = 1;
      $solicitacao = Solicitacao::where('id_setor', $id_setor)->get();
      //print_r($solicitacao);
      


      $relatorio = [
        'title' => 'Relatório',
        'date' => date('d/m/Y'),
        'solicitacao' => $solicitacao,
    ]; 

    
      //$solicitacao = Solicitacao::where('id_setor', $request->id_setor)
         //->whereBetween('created_at', [$request->datainicial.'00:00:00', $request->datafinal.'23:59:59']);

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

