<?php

namespace OfSystem\Http\Controllers;

use Illuminate\Http\Request;
use OfSystem\Cor;
use OfSystem\Http\Requests\CorRequest;

class CorController extends Controller
{
    public function index()
    {
        $cores = Cor::paginate(15);
        return view('cor.index', compact('cores'));
    }
    
    public function show($id)
    {
        $cor = Cor::find($id);
        return view('cor.show', compact('cor'));
    }
    
    public function store(CorRequest $request)
    {
        if($request->method() == Request::METHOD_GET){
            return view('cor.create');
        }
        else{
            try{
                $cor = Cor::create($request->all());
                $cor->save();
                if($cor){
                    \Session::flash('alert', ['class' => 'success', 'message' => 'Cor salva com sucesso!']);
                }
                else{
                    \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel salvar cor']);
                }
            }
            catch(\Exception $e){
                \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
            }
            
            return redirect()->route('cor.index');
        }
    }
    
    public function update(CorRequest$request, $id)
    {
        $cor = Cor::find($id);
        if($request->method() == Request::METHOD_GET){
            return view('cor.update', compact('cor'));
        }
        else{
            try{
                $cor->fill($request->all());
                if($cor){
                    \Session::flash('alert', ['class' => 'success', 'message' => 'Cor alterado com sucesso!']);
                }
                else{
                    \Session::flash('alert', ['class' => 'danger', 'message' => 'Não foi possivel alterar o cor']);
                }
            }
            catch(\Exception $e){
                \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
            }
            
            return redirect()->route('cor.index');
        }
    }
    
    public function delete($id)
    {
        try{
            Cor::destroy($id);
            \Session::flash('alert', ['class' => 'success', 'message' => 'Cor deletada com sucesso!']);
        }
        catch(\Exception $e){
            \Session::flash('alert', ['class' => 'danger', 'message' => "Erro desconhecido ({$e->getMessage()})"]);
        }
        
        return redirect()->route('cor.index');
    }
}
