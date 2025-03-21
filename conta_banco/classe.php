<?php
    # Classe ContaBancaria
class ContaBancaria {
    private $numeroConta;
    private $nome;
    private $cpf;
    private $endereco;
    private $cidade;
    private $estado;
    private $cep;
    private $email;
    private $saldo;

    
    function __construct($numeroConta, $nome, $cpf, $endereco, $cidade, $estado, $cep, $email , $saldo) {
        $this->numeroConta = $numeroConta;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->email = $email;
        $this->saldo = $saldo;
    }
    

    function DadosConta() {
        return array(
            'numeroConta' => $this->numeroConta,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'endereco' => $this->endereco,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'cep' => $this->cep,
            'email' => $this->email,
            'saldo' => $this->saldo
        );
    }
}
?>