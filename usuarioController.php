<?php

class usuarioController extends Controller
{

    /**
     * Lista os usuario
     */
    public function listar()
    {
        $usuario = usuario::all();
        return $this->view('gradeusuario', ['usuario' => $usuario]);
    }

    /**
     * Mostrar formulario para criar um novo contato
     */
    public function criar()
    {
        return $this->view('formusuario');
    }

    /**
     * Mostrar formulário para editar um contato
     */
    public function editar($dados)
    {
        $id     = (int) $dados['id'];
        $usuario= usuario::find($id );

        return $this->view('formusuario', ['usuario' => $usuario]);
    }

    /**
     * Salvar o contato submetido pelo formulário
     */
    public function salvar()
    {
        $usuario           = new usuario;
        $usuario->nome     = htmlspecialchars($this->request->nome);
        $usuario->email    = htmlspecialchars($this->request->email);
        $usuario->senha    = htmlspecialchars(md5($this->request->senha));
        $usuario->dt_criacao = date('Y-m-d H:i:s');
        $usuario->dt_update = date('Y-m-d H:i:s');
        $usuario->ativo = $this->request->ativo;
       if(!empty($usuario->nome) && !empty($usuario->senha) && !empty($usuario->email) && !empty($usuario->ativo)){
        if ($usuario->save()) {
            return $this->listar();
        }
       }else{
           echo "Todos os campos devem estar devidamente preenchidos";
       }
    }

    /**
     * Atualizar o contato conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id      = (int) $dados['id'];
        $usuario       = usuario::find($id);
        $usuario->nome     = $this->request->nome;
        $usuario->email    = $this->request->email;
        $usuario->senha    = $this->request->senha;
        $usuario->dt_update = date('Y-m-d H:i:s');
        $usuario->ativo = $this->request->ativo;
        $usuario->save();

        return $this->listar();
    }

    /**
     * Apagar um contato conforme o id informado
     */
    public function excluir($dados)
    {
        $id     = (int) $dados['id'];
        $usuario= usuario::destroy($id);
        return $this->listar();
    }
}