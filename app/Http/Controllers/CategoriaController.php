<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;
use Shoppvel\Models\Categoria;
use Shoppvel\Http\Requests\CategoriaRequest;
use Shoppvel\Http\Requests\CategoriaFormRequest;
use Shoppvel\Http\Requests\CategoriaUpdateRequest;
use Shoppvel\Models\Carrinho;

class CategoriaController extends Controller {
    private $carrinho = null;

    function __construct() {
        parent::__construct();
        $this->carrinho = new Carrinho();
    }

    public function getCategoria($id = null) {
        if ($id == null) {
            $models['listcategorias'] = Categoria::all();
            //dd($models['listcategorias']);
            return view('frente.categorias', $models);
        }
        
        // se um id foi passado
        $models['categoria'] = \Shoppvel\Models\Categoria::find($id);
        $models['itens'] =  $this->carrinho->getItens();
        $models['total'] =  $this->carrinho->getTotal();
        return view('frente.produtos-categoria', $models);
    }

    public function listar() {
        if(\Session::get('admin') == null){
            return redirect('admin/dashboard')->with('mensagens-danger','Acesso negado');
        }else{
        $models['listcategorias'] = Categoria::Orderby('nome');
        $models['listcategorias'] = Categoria::paginate(10);
            return view('admin.categoria.listar', $models);
        }
    }
    public function criar() {
        if(\Session::get('admin') == null){
            return redirect('admin/dashboard')->with('mensagens-danger','Acesso negado');
        }else{
        return view('admin.categoria.form');
        }
    }
    public function salvar(CategoriaFormRequest $request) {
        if(\Session::get('admin') == null){
            return redirect('admin/dashboard')->with('mensagens-danger','Acesso negado');
        }else{
        $categoria = new Categoria();
            if($_REQUEST['categoria_id']!= ''){
                $categoria->create($request->all());
            \Session::flash('mensagens-sucesso', 'Cadastrado com Sucesso');
                return redirect()->action('CategoriaController@listar');
            }else{
                $categoria->categoria_id=null;
                $categoria->nome = $_REQUEST['nome'];
                $categoria->save();
                \Session::flash('mensagens-sucesso', 'Cadastrado com Sucesso');
                return redirect()->action('CategoriaController@listar');
            }
        }
    }
        
    
    public function editar($id) {
        if(\Session::get('admin') == null){
            return redirect('admin/dashboard')->with('mensagens-danger','Acesso negado');
        }else{
        $models['categoria'] = \Shoppvel\Models\Categoria::find($id);
            if($models['categoria']->categoria_id != ''){
                return view('admin.categoria.form', $models);
            }else{
                $models['categoria']->categoria_id = '';
                return view('admin.categoria.form', $models);
            }
        }
    }

    public function atualizar(CategoriaUpdateRequest $request, $id) {
        
        if(\Session::get('admin') == null){
            return redirect('admin/dashboard')->with('mensagens-danger','Acesso negado');
        }else{
            if($_REQUEST['categoria_id']!= ''){
                $categoria = Categoria::find($id);
                $categoria->nome = $_REQUEST['nome'];
                $categoria->categoria_id = $_REQUEST['categoria_id'];
                $categoria->save();
               return redirect()->action('CategoriaController@listar')->with('mensagens-sucesso', 'Atualizado com Sucesso');
            }else{
                $categoria = Categoria::find($id);
                $categoria->categoria_id = null;
                $categoria->nome = $_REQUEST['nome'];
                $categoria->save();
                return redirect()->action('CategoriaController@listar')->with('mensagens-sucesso', 'Atualizado com Sucesso');
            }
        }
    }
    public function excluir($id){
        if(\Session::get('admin') == null){
            return redirect('admin/dashboard')->with('mensagens-danger','Acesso negado');
        }else{
        $models['categoria'] = \Shoppvel\Models\Categoria::find($id);
        if($id != -1){
            return view('admin.categoria.excluir', $models);
        }
            return redirect()->back()->with('mensagens-danger', 'Não é possível excluir, Há Produto(s) associado(s)');  
        }
    }
    
    public function delete($id) {
        if(\Session::get('admin') == null){
            return redirect('admin/dashboard')->with('mensagens-danger','Acesso negado');
        }else{
        $models['categoria'] = \Shoppvel\Models\Categoria::find($id)->delete();
        \Session::flash('mensagens-sucesso', 'Excluido com Sucesso');
            return redirect()->action('CategoriaController@listar');
        }
    }
}