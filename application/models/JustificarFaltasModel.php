<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JustificarFaltasModel extends CI_Model
{
    function inserir($codusuario, $data, $materia, $motivo)
    {
        $sql = "INSERT INTO faltas (codusuario, dataUsuario, motivoFalta, materiaFalta) values (?, ?, ?, ?)";
        $dados = array($codusuario, $data, $materia, $motivo);
        $this->db->query($sql, $dados);
    }

    function recuperar()
    {
        $sql = "SELECT * from usuarios";
        return $this->db->query($sql)->result();
    }

    function recuperar_faltas()
    {
        $sql = "SELECT * from faltas";
        return $this->db->query($sql)->result();
    }
}