<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    private $UsuarioModel;

    public function __construct(){
        $this->UsuarioModel = new UsuarioModel();
    }

    public function index(){

        return view('usuarios', [
            'usuarios' => $this->UsuarioModel->paginate(7), // Tras vizualizaçao dos dados por paginas, 7 em 7 registros.
            'paginas' => $this->UsuarioModel->pager
        ]);
    }

    public function delete($id){
        if ($this->UsuarioModel->delete($id)){
            echo view('messages', [
                'message' => 'Usuario Excluido com Sucesso !'
            ]);
        } else {
            echo "Erro ao Excluir Usuario";
        }
    }

    function create(){
        return view('form');
    }

    public function store(){
        if ($this->UsuarioModel->save($this->request->getPost())) {
            return view('messages', [
                'message' => 'Usuario salvo com sucesso !'
            ]);
        } else {
            echo "Ocorreu um erro !";
        }
    }

    public function editar($id){
        return view('form',[
            'useredit' => $this->UsuarioModel->find($id)
        ]);
    }
}
