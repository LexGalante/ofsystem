<?php

namespace OfSystem\Http\Controllers;

use OfSystem\Cliente;
use Illuminate\Http\Request;
use OfSystem\Http\Requests\ClienteRequest;
use OfSystem\Util\Util;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(15);
        return view('cliente.index', compact('clientes'));
    }
    
    public function show($id)
    {
        //
    }

    public function store(ClienteRequest $request)
    {
        if($request->method() == Request::METHOD_GET){
            return view('cliente.create');
        }
        else{
            try{
                $cliente = Cliente::create($request->all());
                if($cliente){
                    \Session::flash('alert', ['class' => 'success', 'message' => 'Cliente salvo com sucesso!']);
                }
                else{
                    \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel salvar cliente']);
                }
            }
            catch(\Exception $e){
                \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
            }
            
            return redirect()->route('cliente.index');
        }
    }

    public function update(ClienteRequest $request, $id)
    {        
        $cliente = Cliente::find($id);
        if($request->method() == Request::METHOD_GET){
            return view('cliente.update', compact('cliente'));
        }
        else{
            try{
                $cliente->fill($request->all());
                if($cliente){
                    \Session::flash('alert', ['class' => 'success', 'message' => 'Cliente alterado com sucesso!']);
                }
                else{
                    \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel alterar o cliente']);
                }
            }
            catch(\Exception $e){
                \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
            }
            
            return redirect()->route('cliente.index');
        }
    }

    public function delete(Cliente $cliente)
    {
        //
    }
}
