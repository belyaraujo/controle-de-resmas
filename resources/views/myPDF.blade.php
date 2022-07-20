<!DOCTYPE html>
<html>

<head>
    
    </div>
    {{--<img src="{{ public_path('/img/logonovacap.png') }}" style="width: 100px; height: 100px">--}}
    
    <title>Relatório</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Setor</th>
            <th>Quantidade de Resmas</th>
            <th>Data inicial - Data final</th>
        </tr>
    </thead>
    <tbody>
        @foreach($solicitacao as $solic)
        <tr>
            <th>{{--$solic->id_setor--}}</th>
            <th>{{$solic->quant_resmas}}</th>
            <th>{{$solic->created_at->format('d/m/Y')}}</th>
        </tr>
        @endforeach
    </tbody>

    </table>

</body>

</html>
