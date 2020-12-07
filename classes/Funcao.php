<?php

class Funcao{
	
	public function tratarCaracter($vlr, $tipo){
	switch($tipo){
            case 1: $rst = utf8_decode($vlr); break;
            case 2: $rst = utf8_encode($vlr); break;    
			case 3: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1"); break; 
        }
        return $rst;
    }	

    public function dataAtual($tipo){
	switch($tipo){
            case 1: $rst = date("Y-m-d"); break;
            case 2: $rst = date("d-m-Y H:i:s"); break;
            case 3: $rst = date("d/m/Y"); break;
        }
        return $rst;
    }
    
    public function base64($vlr, $tipo){
        switch($tipo){
            case 1: $rst = base64_encode($vlr); break;
            case 2: $rst = base64_decode($vlr); break;
        }
        return $rst;
    }
    
    public function normalizaString($str){
        $de = array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/", "/(\(|\)|,| |\/)/");
        $para = explode(" ","a A e E i I o O u U n N c C -");  $i = 1;
        $str = preg_replace($de, $para, strtolower($str));
        while($i > 0){ 
            $str = str_replace('--','-',$str,$i);
            if(substr($str, -1) == '-'){
                $str = substr($str, 0, -1);
            }
        }
        return $str;
    }
}

?>