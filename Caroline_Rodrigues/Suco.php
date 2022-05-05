<?php

require_once 'Bebida.php';

class Suco{
    private $sabor;
    

    public function getSabor()
    {
    return $this->sabor;
    }
    
    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
    }

    //Metodos

    public function mostrarBebida()
    {
        return 'Nome:'.$this->nome.'<\br>''Preço: '.$this->preco.'<\br>''Sabor:'.$this->getSabor;
    }

    public function verificarPreco($preco)
    {
        $valida = false;

        if($preco < 2.5){
            $valida = true;
        }
        return $valida;
    }

     
}
?>