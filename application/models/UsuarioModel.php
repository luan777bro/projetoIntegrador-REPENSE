<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioModel extends CI_Model
{
    function inserir($nome, $matricula, $senha)
    {
        $sql = "INSERT INTO usuarios (nome, matricula, senha) values (?, ?, ?)";
        $dados = array($nome, $matricula, $senha);
        $this->db->query($sql, $dados);
    }

    function recuperar()
    {
        $sql = "SELECT * from usuarios";
        return $this->db->query($sql)->result();
    }

    function recuperarPorCodusuario($codusuario)
    {
        $sql = "SELECT * from usuarios where codusuario = ?";
        $dados = array($codusuario);
        return $this->db->query($sql, $dados)->result()[0];
    }

    function recuperarPorLoginESenha($matricula, $senha)
    {
        $sql = "SELECT * FROM usuarios WHERE matricula = ? and senha = ?";
        $dados = array($matricula, $senha);
        return $this->db->query($sql, $dados)->result()[0];
    }

    function atualizar($codusuario, $senha, $nome)
    {
        $sql = "UPDATE usuarios SET  senha = ?, nome = ? WHERE codusuario = ?";
        $dados = array($senha, $nome, $codusuario);
        $this->db->query($sql, $dados);
    }

    function excluir($codusuario)
    {
        $sql = "DELETE FROM usuarios WHERE codusuario = ?";
        $dados = array($codusuario);
        $this->db->query($sql, $dados);
    }
}