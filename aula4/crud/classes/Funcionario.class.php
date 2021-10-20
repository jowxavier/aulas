<?php

class Funcionario extends Conexao
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->conectar();
    }

    public function listar()
    {
        // Query que seleciona a tabela
        $query = "SELECT * FROM funcionario";

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function gravar(array $data)
    {
        $query = "
            INSERT INTO funcionario (nome, cargo)
                VALUES ('".$data['nome']."', '".$data['cargo']."')
        ";

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function exibirPorId($id = 0)
    {
        // Query que seleciona a tabela
        $query = "SELECT * FROM funcionario WHERE id = {$id}";

        // Retorna o resultado da query
        $result = $this->conn->query($query);

        // Retorna a linha executada
        return $result->fetch_assoc();
    }

    public function editar(array $data)
    {
        $query = "
            UPDATE funcionario
                SET nome = '".$data['nome']."', cargo = '".$data['cargo']."'
                    WHERE id = ".$data['id']
        ;

        // Retorna o resultado da query
        return $this->conn->query($query);
    }

    public function deletar($id = 0)
    {
        $query = "
            DELETE FROM funcionario
                WHERE id = ".$id
        ;

        // Retorna o resultado da query
        return $this->conn->query($query);
    }
}
