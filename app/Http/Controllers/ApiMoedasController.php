<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class ApiMoedasController extends Controller
{
    public function index()
    {
        $response = Http::get('https://mindicador.cl/api');
        $apiDados = $response->json();
        $bitcoin = $apiDados['bitcoin'];
        $dolar = $apiDados['dolar'];
        return view('moedas',
            compact('apiDados', 'bitcoin', 'dolar')
        );
    }
}
