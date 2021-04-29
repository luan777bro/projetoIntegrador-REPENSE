<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JustificarFaltas extends CI_Controller
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
        $this->validarLogin();
        $this->load->model("UsuarioModel");
        $dados['registros'] = $this->UsuarioModel->recuperar();
        $this->load->view("cadastrar_justificar_faltas", $dados);
    }

    public function listar()
    {
        $this->validarLogin();
        $this->load->model("JustificarFaltasModel");
        $dados['registros'] = $this->JustificarFaltasModel->recuperar_faltas();
        $this->load->view("listar_justificar_faltas", $dados);
    }

    public function cadastrar()
    {
        $this->validarLogin();
        $this->load->model("UsuarioModel");
        $dados['registros'] = $this->UsuarioModel->recuperar();
        $this->load->view("cadastrar_justificar_faltas", $dados);
    }

    public function editar()
    {
        $this->validarLogin();
        $this->load->view('editar_justificar_faltas');
    }

    public function salvar_falta()
    {
        $this->validarLogin();
        $codusuario = $this->input->post('aluno_falta');
        $data = $this->input->post('date_falta');
        $materia = $this->input->post('materia_falta');
        $motivo = $this->input->post('motivo_falta');

        $this->load->model('JustificarFaltasModel');
        $this->JustificarFaltasModel->inserir($codusuario, $data, $motivo, $materia);
        $this->session->set_flashdata('msg', "Dados inseridos");
        redirect('/');
    }
}