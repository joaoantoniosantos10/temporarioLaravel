<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{

    public function index(){
        $search = request('search');

      if($search){
        $produto = Produto::where(
            [['nome', 'like', '%'.$search.'%']]
        )->get();
        
      }
      else{
        $produto  = Produto::all();
       
      }

      return view('welcome', ['produto' => $produto, 'search' => $search]);

       
    }


    public function create(){

        return view('produtos.create');
}

public function store(Request $request)
{
    $produto = new Produto;
  
     $produto->nome = $request->nome;
     $produto->custo = $request->custo;
     $produto->preco = $request->preco;
     $produto->quantidade = $request->quantidade;

     //Image criacao

     if($request->hasfile('image') && $request->file('image')->isValid()){

        $requestImage = $request->image;
         
        $extension = $requestImage->extension();

        $imageName = md5($requestImage->image->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('img'), $imageName);

        $produto->image = $imageName;
     }
     
     $produto->save();
     
     return redirect('/')->with('msg', 'Produto cadastrado com sucesso');
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto'=>$produto]);
    }

    public function edit(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
             ]);

             $produto->save();

        return redirect('/');
    }

    public function delete($id){

      $produto = Produto::findOrFail($id);
      $produto->delete();
      return redirect('/');
    }
}
