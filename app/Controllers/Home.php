<?php

namespace App\Controllers;

use App\Models\PessoasModel;

use App\Models\CarrosModel;



class Home extends BaseController
{
    
    public function index()
    {
        echo view('template/header');
        echo view('home');
        echo view('template/footer');
    }

    public function granta()
    {
        echo view('template/header');
        echo view('granta');
        echo view('template/footer');
    }

    public function vesta()
    {
        echo view('template/header');
        echo view('vesta');
        echo view('template/footer');
    }

    public function xray()
    {
        echo view('template/header');
        echo view('xray');
        echo view('template/footer');
    }

    public function nivaLegend()
    {
        echo view('template/header');
        echo view('nivaLegend');
        echo view('template/footer');
    }

    public function nivaTravel()
    {
        echo view('template/header');
        echo view('nivatravel');
        echo view('template/footer');
    }

    public function page($page='home'){
        
        echo view('template/header');
        echo view($page);
        echo view('template/footer');
    }

    public function pessoas(){
        $model = new PessoasModel();

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){

            return redirect("login");

        }

        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas()
        ];

        echo view('template/header');
        echo view('pessoa',$data);
        echo view('template/footer');
    }

    public function listaCarros(){
        $model = new CarrosModel();

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){

            return redirect("login");

        }

        $data = [
            'carros'=>$model->getCarros()
        ];

        echo view('template/header');
        echo view('listaCarros',$data);
        echo view('template/footer');
    }

    public function cadastro(){

        /*$data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){

            return redirect("login");

        }*/

        echo view('template/header');
        echo view('cadastro-pessoas');
        echo view('template/footer');
    }

    public function cadastroCarros(){

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){

            return redirect("login");

        }

        echo view('template/header');
        echo view('listaCarros');
        echo view('template/footer');
    }

    public function gravarCarro(){
        $model = new CarrosModel();

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){

            return redirect("login");

        }

        $model->save([
            'id' => $this->request->getVar('id'),
            'modelo' => $this->request->getVar('modelo'),
            'marca' => $this->request->getVar('marca'),
            'placa' => $this->request->getVar('placa')
        ]);

        return redirect('listaCarros');
    }

    public function gravar(){
        $model = new PessoasModel();

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('logado')){

            return redirect("login");

        }

        $model->save([
            'id' => $this->request->getVar('id'),
            'nome' => $this->request->getVar('nome'),
            'profissao' => $this->request->getVar('profissao'),
            'idade' => $this->request->getVar('idade')
        ]);

        return redirect('pessoa');
    }

    

    public function excluir($id = null){
        $model = new PessoasModel();
        $model->delete($id);
        return redirect("pessoa");
    }

    public function editar($id = null){
        $model = new PessoasModel();

        $data = [
            'pessoa' => $model->getPessoa($id)
        ];

        echo view('template/header');
        echo view('cadastro-pessoas',$data);
        echo view('template/footer');
    }

    public function login(){
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }

    public function excluirCarro($id = null){
        $model = new CarrosModel();
        $model->delete($id);
        return redirect("listaCarros");
    }

    public function editarCarro($id = null){
        $model = new CarrosModel();

        $data = [
            'carros' => $model->getCarro($id)
        ];

        echo view('template/header');
        echo view('listaCarros',$data);
        echo view('template/footer');
    }


    Public function logar(){
         $model = new PessoasModel();

         $senha = $this->request->getVar("senha");
         $nome = $this->request->getVar("nome");

         $data['usuario'] = $model->userLogin($nome, $senha);
         $data['session'] = \Config\Services::session();

         if(empty($data['usuario'])){
             return redirect("login");
         }else{
             $sessionData = [
                 'usuario' => $nome,
                 'logado' => TRUE
             ];
             $data['session']->set($sessionData);
             return redirect("pessoa");

         }

    }
    public function sair(){
        $data['session'] = \Config\Services::session();
        $data['session']->destroy();
        return redirect("login");
     }
}
