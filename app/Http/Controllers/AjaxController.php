<?php

namespace OfSystem\Http\Controllers;

use Illuminate\Http\Request;

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
        return response()->json($endereco, 200);
    }
}
