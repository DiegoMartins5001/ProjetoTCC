<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;

class FrenteLojaController extends Controller {

    function getIndex() {
            /**
         * Verifique o arquivo Controller.php onde usamos uma variavel
         * compartilhada (global) para todas as views, que devem ser motrar
         * as categorias do lado esquerdo em nosso sistema, assim não precisamos
         * chamar em cada acao a lista de categorias para popular aquele menu
         */
        $models['produtos'] = \Shoppvel\Models\Produto::destacado()->get();
        $models['produto'] = \Shoppvel\Models\Produto::destacado(0)->get();
        $models['mesa'] = \Shoppvel\Models\Mesa::orderBy('numero')->get();
        
        return view('frente.entrada', $models); 
        }
    
        
    

    function getSobre() {
        return view('sobre');
    }
}
