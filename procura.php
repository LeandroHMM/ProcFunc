<?php

class FuncionariosBusca
{
    private $funcionarios;

    function __construct()
    {
      $this ->funcionarios = [
         [ 'cpf' => '123456789-22', 'nome'=> 'Pedro', 'salario'=> 'R$ 2800'],
         ['cpf' => '987654321-00', 'nome' => 'Ana','salario'=> 'R$ 6800']
      ];
    }

    public function all()
    {
        return $this -> funcionarios;
    }

    public function find ($cpf)
    {
        foreach ($this ->funcionarios as $func){
            if($func['cpf']== $cpf){
                return $func;
            }
        }
        return null;
    }
}
?>