<?php

require_once('database.php');
// Api retornando os usuarios da tabela usuarios do bannco 
/***
 * E retornado Objeto contendo 3 posições e na terceira temos os valores da tabela em forma de json
 */
$dados = array();
$dados[] = 0;
$dados[] = 'ok';

$usuarios = $PDO->query('SELECT * FROM usuarios')->fetchAll();

$n = empty($usuarios);



if (!$n) {

    $dados[] = $usuarios;
    echo '<pre>';
    echo (json_encode($dados));

    echo '<pre>';
} else {

    $dados[0] = "";
    $dados[1] = true;
    $dados[2] = '';
    echo (json_encode($dados));
}
echo '<br>';






// Estudos 
$num = count($dados[2]);

for ($i=0; $i < $num; $i++) { 
    echo $dados[2][$i]['id'] . '  '; 
    echo $dados[2][$i]['nome'] . '  '; 
    echo $dados[2][$i]['email'] . '<br>'; 
   // echo '-----------------------------------------------';

}

echo '<br>';
$d=['jose','antonio','marcos'];

function imprime($s){
    echo $s ."<br>";
}

$res= array_map('imprime',$d);



?>