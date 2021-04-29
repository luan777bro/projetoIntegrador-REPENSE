<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function validarLogin()
    {
        if (!$this->session->userdata("usuario")) {
            redirect('/');
        }
    }

    public function index()
    {
        $this->load->view("home");
    }

    public function listar()
    {
        $this->validarLogin();
        $this->load->model("UsuarioModel");
        $dados['registros'] = $this->UsuarioModel->recuperar();
        $this->load->view("listar_usuario", $dados);
    }

    public function cadastrar()
    {
        $this->load->view('cadastro_usuario');
    }

    public function editar($codusuario)
    {
        $this->validarLogin();
        $this->load->model('UsuarioModel');
        $dados['usuario'] = $this->UsuarioModel->recuperarPorCodusuario($codusuario);
        $this->load->view('atualizar_usuario', $dados);
    }

    public function salvar_usuario()
    {
        $nome = $this->input->post('nome_usuario');
        $matricula = $this->input->post('matricula_usuario');
        $senha = $this->input->post('senha_usuario');

        $this->load->model('UsuarioModel');
        $this->UsuarioModel->inserir($nome, $matricula, md5($senha));
        $this->session->set_flashdata('msg', "Dados inseridos");
        redirect('/');
    }

    public function modificar($codusuario)
    {
        $this->validarLogin();
        $nome = $this->input->post('nome_usuario');
        $senha = $this->input->post('senha_usuario');

        $this->load->model('UsuarioModel');
        $this->UsuarioModel->atualizar($codusuario, md5($senha), $nome);
        $this->session->set_flashdata('msg', "Dados modificados");
        redirect('usuario');
    }

    function apagar($codusuario)
    {
        $this->validarLogin();
        $this->load->model('UsuarioModel');
        $this->UsuarioModel->excluir($codusuario);
        $this->session->set_flashdata('msg', "Dados excluidos");
        redirect('usuario');
    }

    public function autenticar()
    {
        $login = $this->input->post("email");
        $senha = $this->input->post("pass");

        $this->load->model('UsuarioModel');

        $usuario = $this->UsuarioModel->recuperarPorLoginESenha($login, md5($senha));

        if ($usuario) {
            $this->session->set_userdata("usuario", $usuario);

            redirect('/usuario');
        } else {

            $this->session->set_flashdata("erro_login", "Email e/ou senha inválido(s)");
            $this->session->set_flashdata('dados_errados', $usuario);

            redirect('/');
        }
    }

    public function logout()
    {
        if (!$this->session->userdata("usuario")) {
            redirect('/');
        }

        $this->session->unset_userdata("usuario");
        redirect("/");
    }
}