<?php 
require_once 'config.php';

// receber todos os dados do formulario
// $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

$logradouro = filter_input(INPUT_POST, 'logradouro');
$numero = filter_input(INPUT_POST, 'numero');


// verifica se o usuario clicou no botao
if($nome){
    $sql = $conn->prepare("INSERT INTO usuarios
    (nome, email) VALUES
    (:nome, :email)");
    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':email', $email);
    $sql->execute();

    $id_usuario = $conn->lastInsertId();
 
    
    $cad_endereco = $conn->prepare("INSERT INTO endereco
    (logradouro, numero, usuario_id) VALUES
    (:logradouro, :numero, :usuario_id)");
    $cad_endereco->bindParam(':logradouro', $logradouro);
    $cad_endereco->bindParam(':numero',$numero);
    $cad_endereco->bindParam(':usuario_id',$id_usuario);
    $cad_endereco->execute();
    header("location: index.php");
    exit;


}else{
    echo "Erro";
    
}
?>