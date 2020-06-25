@extends('layout')
@section('cabecalho')
    Moedas
@endsection
@section('conteudo')
    <ul>
            <h6>Versão {{ $apiDados['version'] }}</h6>
            <h6>Autor {{ $apiDados['autor'] }}</h6>
        <li>Valor do Bitcoin: {{$bitcoin['valor']}}</li>
        <li>Valor do Dolar: {{$dolar['valor']}}</li>
    </ul>
@endsection
