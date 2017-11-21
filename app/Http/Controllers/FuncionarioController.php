<?php

namespace OfSystem\Http\Controllers;

use OfSystem\Funcionario;
use Illuminate\Http\Request;
use OfSystem\Http\Requests\FuncionarioRequest;
use OfSystem\Cargo;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::paginate(15);
        return view('funcionario.index', compact('funcionarios'));
    }
    
    public function show($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionario.show', compact('funcionario'));
    }
    
    public function create()
    {
        $cargos = Cargo::all();
        return view('funcionario.create', compact('cargos'));
    }
    
    
    public function store(FuncionarioRequest $request)
    {
        try{
            $funcionario = new Funcionario();
            $funcionario->fill($request->all());
            if($funcionario->save()){
                \Session::flash('alert', ['class' => 'success', 'message' => 'Funcionario salvo com sucesso!']);
            }
            else{
                \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel salvar funcionario']);
            }
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('funcionario.index');
    }
    
    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        $cargos = Cargo::all();
        return view('funcionario.update', compact('funcionario', 'cargos'));
    }
    
    public function update(FuncionarioRequest $request, $id)
    {
        try{
           $funcionario = Funcionario::find($id);
           $funcionario->fill($request->all());           
           if($funcionario->save()){
               \Session::flash('alert', ['class' => 'success', 'message' => 'Funcionario alterado com sucesso!']);
           }
           else{
               \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel alterar o funcionario']);
           }           
        }
        catch(\Exception $e){
           \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('funcionario.index');
    }
    
    public function delete($id)
    {
        try{
            Funcionario::destroy($id);
            \Session::flash('alert', ['class' => 'success', 'message' => 'Funcionario deletado com sucesso!']);
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('funcionario.index');
    }
}
