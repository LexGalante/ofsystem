<?php

namespace OfSystem\Http\Controllers;

use OfSystem\Cargo;
use Illuminate\Http\Request;
use OfSystem\Http\Requests\CargoRequest;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::paginate(15);
        return view('cargo.index', compact('cargos'));
    }
    
    public function show($id)
    {
        $cargo = Cargo::find($id);
        return view('cargo.show', compact('cargo'));
    }
    
    public function create()
    {
        return view('cargo.create');
    }
    
    
    public function store(CargoRequest $request)
    {
        try{
            $cargo = Cargo::create($request->all());
            $cargo->save();
            if($cargo){
                \Session::flash('alert', ['class' => 'success', 'message' => 'Cargo salvo com sucesso!']);
            }
            else{
                \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel salvar cargo']);
            }
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('cargo.index');
    }
    
    public function edit($id)
    {
        $cargo = Cargo::find($id);
        return view('cargo.update', compact('cargo'));
    }
    
    public function update(CargoRequest $request, $id)
    {
        try{
           $cargo = Cargo::find($id);
           $cargo->fill($request->all());
           $cargo->save();
           if($cargo){
               \Session::flash('alert', ['class' => 'success', 'message' => 'Cargo alterado com sucesso!']);
           }
           else{
               \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel alterar o cargo']);
           }           
        }
        catch(\Exception $e){
           \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('cargo.index');
    }
    
    public function delete($id)
    {
        try{
            Cargo::destroy($id);
            \Session::flash('alert', ['class' => 'success', 'message' => 'Cargo deletado com sucesso!']);
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('cargo.index');
    }
}
