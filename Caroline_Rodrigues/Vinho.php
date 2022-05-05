<?php

require_once 'Bebida.php';

class Vinho{
    private $safra;
    private $tipo;

    public function getSafra()
    {
    return $this->safra;
    }
    
    public function setSafra($safra)
    {
        $this->safra = $safra;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

     //Metodos

    public function mostrarBebida()
    {
        return 'Nome:'.$this->nome.'<\br>''Preço: '.$this->preco.'<\br>''Safra:'.$this->safra;
    }

    public function verificarPreco($preco)
    {
        $valida = false;

        if($preco < 25){
            $valida = true;
        }
        return $valida;
    }
}
?>