<?php

include 'conecta.php';
 
$placa =$_POST["placa"];
$ano =$_POST["ano"];
$proprietario =$_POST["proprietario"];
$marca =$_POST["marca"];
$municipio =$_POST["municipio"];
$categoria =$_POST["categoria"];


if(!empty($_POST["codigo"])){
    $codigo =$_POST["codigo"];
}else{
    $codigo =0;  
}


if ($codigo == 0){
    $sql = "insert into veiculo(placa, ano, fkproprietario, fkmarca, fkmunicipio, fkcategoria) 
    values('$placa','$ano','$proprietario','$marca','$municipio','$categoria')";
    mysqli_query($con, $sql);
    redirect('veiculo/cadastrar?deuboa=1');
}else{
    $sql = "update veiculo set placa = '$placa',ano = '$ano' ,
    fkproprietario = '$proprietario' ,
    fkmarca = '$marca' ,
    fkmunicipio = '$municipio'  
    fkcategoria = '$categoria'  
    where idveiculo = '$codigo'";
    mysqli_query($con, $sql);
    redirect('veiculo/pesquisar?deuboa=1');
}
?>
