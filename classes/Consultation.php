<?php
require_once 'connection.php';
require_once 'funcao.php';

class Consultation {

    public function __construct(){
        $this->func = new Funcao();
    }



    public function cadastrar($dados){
        $servico = $dados['servico'];
        $tel = $dados['tel'];
        $data = $dados['data'];
        $horario = $dados['horario'];
        $mensagem = $dados['mensagem'];
        $ID_users = $dados['ID'];
        
        $aprove = Connection::query("SELECT servico, horario FROM consultation WHERE horario = '$horario' AND servico = '$servico' AND data = '$data'");
        if($aprove->num_rows > 0){
            return 'horario';
         }else{
            $sql = "INSERT INTO consultation (servico, tel, data, horario, mensagem, ID_users) VALUES ('$servico', '$tel', '$data', '$horario', '$mensagem', '$ID_users');";//
            // var_dump($sql);exit(0);
            if(Connection::query($sql) === TRUE){
                return 'ok';
            }else{
                return 'erro';
            }
         }
        
    }

    public function mostrar($dados){
        $sql = Connection::query("SELECT servico, tel, horario, data, horario, mensagem, ID_users FROM consultation WHERE ID_users = '$dados'");
        return $sql;
    }
}