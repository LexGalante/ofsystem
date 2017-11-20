<?php

namespace OfSystem\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    /**
     * Retorna um json do endereco do cep passado como parametro
     * @param string $cep
     * @return \Illuminate\Http\JsonResponse
     */
    public function endereco($cep)
    {
        $endereco = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");
        return response()->json($endereco, 200, ['charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
    /**
     * Retorna um json com dados cliente filtrados pelo nome ou sobrenome
     * @param unknown $q
     * @return \Illuminate\Http\JsonResponse
     */
    public function cliente($q)
    {
        $clientes = DB::table('clientes')->where('nome', 'like', "%{$q}%")->orWhere('sobrenome', 'like', "%{$q}%")->get();
        return response()->json($clientes, 200, ['charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
}
