<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller
{
    public function pesquisar(){
        $produtos=Produto::all();
        /*foreach ($produtos as $produto){
            echo $produto->descricao."<br>";


        }*/
       // return view('produto.pesquisar')->with('produtos',$produtos);

        $descricao=Input::get('descricao');
        $produtos=Produto::where('descricao','like','%'.$descricao.'%')->get();
        return view('produto.pesquisar')->with('produtos',$produtos);


    }

    public function mostrar_inserir()
    {
        return view('produto.inserir');
    }

    public function inserir()
    {
        // Criando um novo objeto do tipo Produto
        $produto = new Produto();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $produto->descricao = Input::get('descricao');
        $produto->quantidade = Input::get('quantidade');
        $produto->valor = Input::get('valor');
        $produto->data_vencimento = Input::get('data_vencimento');

        // Salvando no banco de dados
        $produto->save();

        // Criado uma mensagem para o usuário
        $mensagem = "Produto inserido com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('produto.inserir')->with('mensagem', $mensagem);
    }
}
