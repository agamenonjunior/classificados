<?php

class User {
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $contato;
    
    public function Cadastrar($nome,$email,$senha,$contato){        

    }
    public function Editar($id){
        
    }

    public function Deletar($id){
        
    }

    public function Listar(){

    }

    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha($senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of contato
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * Set the value of contato
     */
    public function setContato($contato): self
    {
        $this->contato = $contato;

        return $this;
    }
}