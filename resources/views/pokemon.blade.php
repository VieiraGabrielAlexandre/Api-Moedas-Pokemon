@extends('layout')
@section('cabecalho')
    Pokemon - Dados
@endsection
@section('conteudo')
    <ul class="list-group">
            <li class="list-group-item">
                <img src="{{ $pokemonDados['front_default']}}"/>
            </li>
        </a>
    </ul>
@endsection
