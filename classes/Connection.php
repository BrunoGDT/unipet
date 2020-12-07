<?php

class Connection {

    private static function conectar(){

        return new mysqli('127.0.0.1', 'root', '', 'unipet');
    }

    public static function query($sql){ 
        
        try { 
        $conn = self::conectar();
        return $conn->query($sql);
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
       
    }
}


?>