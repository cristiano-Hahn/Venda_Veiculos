<?php

include 'conecta.php';
 
$nome =$_POST["nome"];
$endereco =$_POST["endereco"];
$bairro =$_POST["bairro"];
$cpf =$_POST["cpf"];
$telefone =$_POST["telefone"];
$rg =$_POST["rg"];
$datanascimento =$_POST["datanascimento"];


if(!empty($_POST["codigo"])){
    $codigo =$_POST["codigo"];
}else{
    $codigo =0;  
}


if ($codigo == 0){
    $sql = "insert into proprietario(proprietario, endereco, bairro, cpf, telefone, rg, datanascimento) 
    values('$nome','$endereco','$bairro','$cpf','$telefone','$rg','$datanascimento')";
    mysqli_query($con, $sql);
    redirect('proprietario/cadastrar?deuboa=1');
}else{
    $sql = "update proprietario set 
    proprietario = '$nome',
    endereco = '$endereco',
    bairro = '$bairro',
    cpf = '$cpf',
    telefone = '$telefone',
    rg = '$rg',
    datanascimento = '$datanascimento'
    where idproprietario = '$codigo'";
    mysqli_query($con, $sql);
    redirect('proprietario/pesquisar?deuboa=1');
}
?>
