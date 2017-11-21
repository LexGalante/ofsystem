<?php

namespace OfSystem\Http\Controllers;

use Illuminate\Http\Request;
use OfSystem\Veiculo;
use OfSystem\Http\Requests\VeiculoRequest;
use OfSystem\Cor;
use OfSystem\Marca;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::paginate(15);
        return view('veiculo.index', compact('veiculos'));
    }
    
    public function show($id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculo.show', compact('veiculo'));
    }
    
    public function create()
    {
        $cores = Cor::all();
        $marcas = Marca::all();
        return view('veiculo.create', compact('cores', 'marcas'));
    }
    
    
    public function store(VeiculoRequest $request)
    {
        try{
            $veiculo = Veiculo::create($request->all());
            $veiculo->save();
            if($veiculo){
                \Session::flash('alert', ['class' => 'success', 'message' => 'Veiculo salvo com sucesso!']);
            }
            else{
                \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel salvar veiculo']);
            }
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('veiculo.index');
    }
    
    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        $cores = Cor::all();
        $marcas = Marca::all();
        return view('veiculo.update', compact('veiculo', 'cores', 'marcas'));
    }
    
    public function update(VeiculoRequest $request, $id)
    {
        try{
            $veiculo = Veiculo::find($id);
            $veiculo->fill($request->all());
            $veiculo->save();
            if($veiculo){
                \Session::flash('alert', ['class' => 'success', 'message' => 'Veiculo alterado com sucesso!']);
            }
            else{
                \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel alterar o veiculo']);
            }
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('veiculo.index');
    }
    
    public function delete($id)
    {
        try{
            Veiculo::destroy($id);
            \Session::flash('alert', ['class' => 'success', 'message' => 'Veiculo deletado com sucesso!']);
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('veiculo.index');
    }
}
