<?php

include ('procura.php');

$funcionarios = new FuncionariosBusca();

$todos = $funcionarios-> all();
$func = $funcionarios->find('123456789-22');


print_r ($todos);
echo '<br><br>';
print_r($func);
?>