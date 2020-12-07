<?php
require_once 'connection.php';
require_once 'funcao.php';

class User {

	private $con, $func;
    private $nome, $petnome, $email, $senha;
 
    public function __construct(){
        $this->func = new Funcao();
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }

    public function cadastro($dados){
        $this->email = $dados['email'];
        
       
        $result = Connection::query("SELECT email FROM users WHERE email = '$this->email';");
        if($result->num_rows > 0){
            return 'Email ja cadastrado!';
            mysqli_close($result);
        }
        else{
            
            return $this->cadastrar($dados);
            mysqli_close($result);
        }
    }

    public function cadastrar($dados){
        $nome = $dados['nome'];
        $petnome = $dados['nomepet'];
        $email = $dados['email'];
        $senha = password_hash($dados['senha'], PASSWORD_BCRYPT);
        $sql = "INSERT INTO `users` (`nome`, `nomepet`, `email`, `senha`) VALUES ('$nome', '$petnome', '$email', '$senha');";
        if(Connection::query($sql) === TRUE){
            return 'ok';
        }
        else{
            return 'erro';
        }

    }

    public function logar($dados){
        $email = $dados['email'];
        $sql = "SELECT ID, nome, nomepet, email, senha FROM users WHERE email = '$email' limit 1";
        $result = Connection::query($sql)->fetch_array();
 
        if($result && password_verify($dados['senha'], $result['senha'])){
            session_start();
            $_SESSION['logado'] = "sim";
            $_SESSION['ID'] = $result['ID'];
            $_SESSION['nome'] = $result['nome'];
            $_SESSION['petnome'] = $result['nomepet'];
            $_SESSION['email'] = $result['email'];
            return 'ok';
        }
    }


}