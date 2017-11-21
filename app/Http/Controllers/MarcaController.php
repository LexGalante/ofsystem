<?php

namespace OfSystem\Http\Controllers;

use Illuminate\Http\Request;
use OfSystem\Http\Requests\MarcaRequest;
use OfSystem\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::paginate(15);
        return view('marca.index', compact('marcas'));
    }
    
    public function show($id)
    {
        $marca = Marca::find($id);
        return view('marca.show', compact('marca'));
    }
    
    public function create()
    {
        return view('marca.create');
    }
    
    
    public function store(MarcaRequest $request)
    {
        try{
            $marca = Marca::create($request->all());
            $marca->save();
            if($marca){
                \Session::flash('alert', ['class' => 'success', 'message' => 'Marca salvo com sucesso!']);
            }
            else{
                \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel salvar marca']);
            }
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('marca.index');
    }
    
    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('marca.update', compact('marca'));
    }
    
    public function update(MarcaRequest $request, $id)
    {
        try{
            $marca = Marca::find($id);
            $marca->fill($request->all());
            $marca->save();
            if($marca){
                \Session::flash('alert', ['class' => 'success', 'message' => 'Marca alterado com sucesso!']);
            }
            else{
                \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel alterar o marca']);
            }
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('marca.index');
    }
    
    public function delete($id)
    {
        try{
            Marca::destroy($id);
            \Session::flash('alert', ['class' => 'success', 'message' => 'Marca deletado com sucesso!']);
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('marca.index');
    }
}
