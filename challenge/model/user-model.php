<?php

class User
{
     private $id;
     private $nome;
     private $email;
     private $senha;

     public function validate()
     {
          $nomePattern = "/^[\ \a-zà-ú]+$/i";
          $emailPattern = "/^[a-z0-9\_\-\]+@[a-z0-9]+.(com|br|com.br)$/i";
          $senhaPattern = "/^[a-z0-9]{8,15}$/i";

          if (!preg_match($nomePattern, $this->nome)) {
               echo "Falha na validação Nome";
               die;
          }
          if (!preg_match($emailPattern, $this->email)) {
               echo "Falha na validação Email";
               die;
          }
          if (!preg_match($senhaPattern, $this->senha)) {
               echo "Falha na validação Senha";
               die;
          }

          if (
               preg_match($nomePattern, $this->nome)
               && preg_match($emailPattern, $this->email) 
               && preg_match($senhaPattern, $this->senha)
          ):
               return true;
          else :
               return false;
          endif;
     }

     public function getSenha()
     {
          return $this->senha;
     }

     public function setSenha($senha)
     {
          $this->senha = $senha;

          return $this;
     }

     public function getEmail()
     {
          return $this->email;
     }

     public function setEmail($email)
     {
          $this->email = $email;

          return $this;
     }

     public function getNome()
     {
          return $this->nome;
     }

     public function setNome($nome)
     {
          $this->nome = $nome;

          return $this;
     }

     public function getId()
     {
          return $this->id;
     }

     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }
}
