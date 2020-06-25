<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiPokemonsController extends Controller
{
    public function index()
    {
        $limit = '?limit=151';
        $endpont = 'pokemon/' . $limit;
        $response = Http::get('https://pokeapi.co/api/v2/'. $endpont);
        $pokemons = $response->json();
        $idPokemon = 1;
        return view ('pokemons', compact('pokemons', 'idPokemon'));
    }

    public function pokemon(int $id)
    {
        $endpont = 'pokemon/' . $id;
        $response = Http::get('https://pokeapi.co/api/v2/'. $endpont);
        $pokemon = $response->json();
        $pokemonDados = $pokemon['sprites'];
        return view ('pokemon', compact('pokemon', 'pokemonDados'));
    }
}
