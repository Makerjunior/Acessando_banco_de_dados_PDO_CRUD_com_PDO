<?php

//require_once('.\vendor\autoload.php');

// Verificando se PDO está disponivel
if(!defined('PDO::ATTR_DRIVER_NAME')){
echo "PDO não disponivel ative em php.ini <br>";
}else{
    echo "PDO disponivel para uso<br/>";
}

echo '<h2>Select</h2>';

require_once('database.php');
// $usuario e uma matrix bidimencional onde cada posição contem um array de com o campo da tabela
$usuarios = $PDO->query('SELECT * FROM usuarios')->fetchAll();
echo '<h4>Valores retornados pela tabela usuarios</h4>';
echo '<pre>';
print_r($usuarios);
echo '</pre>';
 
$num = count($usuarios);

//imprime os valores
echo '<h4>Impresão dos valores retornados pela tabela</h4>';
for ($i=0; $i < $num; $i++) { 
    echo 'ID = '. $usuarios[$i]['id'].'<br>';
    echo 'Nome = '. $usuarios[$i]['nome']. '<br>';
    echo 'Email = '. $usuarios[$i]['email'].'<br>';
  }
  /*** Imprimindo usando forech
   * foreach ($usuarios as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
} */
echo '<hr>';


echo '<h4>Select com parametro</h4>';
$nome = 'Junior Pereira';
$email = 'junior@gmail.com';
$query = $PDO->prepare("SELECT * FROM usuarios WHERE  nome = :nome AND email = :email");
$query->execute(['nome' => $nome , 'email' => $email]);
$pesquisa = $query->fetch();
echo '<pre>';
print_r($pesquisa);
echo '</pre>';

foreach ($pesquisa as $value) {
    
    echo $value .'<br>';
}
echo '<hr>';


echo '<h4>Select com LIKE </h4>';
$nom = "Deise";
$sql = $PDO->prepare("SELECT * FROM usuarios WHERE nome LIKE ?");
$sql->execute( array("%{$nom}%"));
$resul = $sql->fetchAll();
echo '<pre>';
print_r($resul);
echo '</pre>';
foreach ($resul as  $value) {
    
    echo  $value['id'].'<br>';
    echo  $value['nome'].'<br>';
    echo  $value['email'].'<br>';
    

}

/* Exemplo de forach com chave
$estados = [
    'SP' => 'São Paulo',
    'MG' => 'Minas Gerais',
    'RJ' => 'Rio de Janeiro',
    'ES' => 'Espírito Santo'
];

foreach ($estados as $sigla => $nome) {
    echo $nome . " - " . $sigla . PHP_EOL;
}
*/
echo '<hr>';


echo '<h4>Create / inserindo daddos no banco </h4>';

$dados = [
   'nome' => 'Jose Pedro',
   'email' => 'pedro@gmail.com'
];

$sql_dados = "INSERT INTO usuarios SET nome=:nome, email=:email;";
  $status =$PDO->prepare($sql_dados)->execute($dados);
if ($status) {
  $usuario_id = (int) $PDO->lastInsertId(); // ultimo id adicionado em inteiro
}
var_dump($usuario_id);
echo '<hr>';


echo '<h4>Update  </h4>';
$dados_Update = [
    'id' => 4,
    'nome' => 'Pedro Junior',
    'email' => 'peddro@gmail.com'
 ];
 
 $sql_dados_Update = "UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id;";
 $status_Update =$PDO->prepare($sql_dados_Update)->execute($dados_Update);

 echo 'Usuario atualizado<br>';
 echo '<hr>';

 echo '<hr>';


echo '<h4>Delete</h4>';
$delete = ['id' => 25];
$PDO->prepare("DELETE FROM usuarios WHERE id=:id")->execute($delete);









?>
