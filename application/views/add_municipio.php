<?php

include 'conecta.php';
 
$nome =$_POST["nome"];
$idestado =$_POST["idestado"];


if(!empty($_POST["codigo"])){
    $codigo =$_POST["codigo"];
}else{
    $codigo =0;  
}


if ($codigo == 0){
    $sql = "insert into municipio(municipio, fkestado) 
    values('$nome', '$idestado')";
    mysqli_query($con, $sql);
    redirect('municipio/cadastrar?deuboa=1');
}else{
    $sql = "update municipio set municipio = '$nome', fkestado = '$idestado' where idmunicipio = '$codigo'";
    mysqli_query($con, $sql);
    redirect('municipio/pesquisar?deuboa=1');
}
?>
