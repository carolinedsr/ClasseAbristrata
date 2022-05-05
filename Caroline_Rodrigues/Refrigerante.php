<?php
require_once 'Bebida.php';

class Refrigerante{
    private $retornavel;

    public function getRetornavel()
    {
        return $this->retornavel;
    }

    public function setRetornavel($retornavel)
    {
        $this->retornavel = $retornavel;
    }
     //Metodos

     public function mostrarBebida()
    {
        return 'Nome:'.$this->nome.'<\br>'"Preço: ".$this->preco.'<\br>''Retornavel:'.$this->retornavel;
    }

    public function verificarPreco($preco)
    {
        $valida = false;

        if($preco < 5){
            $valida = true;
        }
        return $valida;
    }
}
{
    
}

?>