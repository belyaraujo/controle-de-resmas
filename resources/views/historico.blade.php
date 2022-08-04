@extends('layouts.main')
@section('title', 'Novacap - Histórico')
@section('content')

    <br><br>
   

    <div class="container">

        <a class="btn btn-outline-primary" href="/cadastro" role="button">NOVA SOLICITAÇÃO</a>
        <br><br>

        {{-- dd($solicitacao) --}}
        <div class="mh-100" style="width: 1200px; height: 1000px;">
            <div class="card border-dark" style="max-width: 700rem;">
                <div class="card-header text-white" style="background-color: #044f84;">Histórico de solicitação de resmas
                </div>
                <div class="card-body text-dark">
                    <p class="card-text">
                    <table class="table table-hover">
                        <thead class="table-primary" style="background-color: 	#E1F5FE;">
                            <tr>
                                <th scope="col">Número de solicitação</th>
                                <th scope="col">Setor solicitante</th>
                                <th scope="col">Quantidade de resmas</th>
                                <th scope="col">Data da solicitação</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($solicitacao as $solic)
                                <tr>

                                    <th value="{{ $solic->id }}">{{ $solic->id }}</th>
                                    <td value="{{ $solic->id }}">{{ $solic->setores->Nome }} -
                                        {{ $solic->setores->Sigla }}</td>
                                    <td value="{{ $solic->id }}">{{ $solic->quant_resmas }}</td>
                                    <td value="{{ $solic->id }}">{{ $solic->created_at->format('d/m/Y') }}</td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    </p>
                </div>


            @endsection
