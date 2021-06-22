<?php
require 'config.php';

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST,'senha');

if($name && $email) {

 $sql = $pdo->prepare("INSERT INTO users (name,email,pass) VALUES (:name,:email,:senha)");
$sql->bindValue(':name', $name);
$sql->bindValue(':email',$email);
$sql->bindValue(':senha',$senha);
$sql->execute();

 header("Location:index.php");
exit;
}

else {
header("Location:Cadastrar.php");
exit;
}
?>