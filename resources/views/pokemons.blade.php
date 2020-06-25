@extends('layout')
@section('cabecalho')
    Pokemon
@endsection
@section('conteudo')
    @foreach($pokemons['results'] as $pokemon)
        <ul class="list-group">
            <a href="/pokemon/{{ $idPokemon }}">
                <li class="list-group-item">{{ ucfirst($pokemon['name']) }}</li>
            </a>
        </ul>
    @endforeach
@endsection
