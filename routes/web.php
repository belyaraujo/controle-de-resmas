<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Htpp\Request;
use App\Http\Controllers\cadastro;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\historico;
use App\Http\Controllers\relatorio;
use App\Http\Controllers\PDFController;

use App\Http\Controllers\SolicitacaoController;
use App\Models\Solicitacao;
use App\Http\Controllers\TesteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/cadastro', [cadastro::class, 'cadastro']);
Route::post('/cadastro', [cadastro::class, 'cadastro']);


Route::get('/', [historico::class, 'show'])->name('historico');

   
/*Route::post('/', [historico::class, 'historico'])->name('historico');*/

//Rota criar setor
Route::post('/cadastro-setor', [SolicitacaoController::class, 'store'])->name('criar-solicitacao');

Route::get('/relatorio', [relatorio::class, 'relatorio'])->name('relatorio');
//Route::post('/relatorio', [relatorio::class, 'relatorio']);


Route::get('/generate-pdf', [relatorio::class, 'Docs'])->name('gera-pdf');





