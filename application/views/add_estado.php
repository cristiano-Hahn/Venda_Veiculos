<?php

include 'conecta.php';
 
$nome =$_POST["nome"];


if(!empty($_POST["codigo"])){
    $codigo =$_POST["codigo"];
}else{
    $codigo =0;  
}


if ($codigo == 0){
    $sql = "insert into estado(estado) 
    values('$nome')";
    mysqli_query($con, $sql);
    redirect('estado/cadastrar?deuboa=1');
}else{
    $sql = "update estado set estado = '$nome' where idestado = '$codigo'";
    mysqli_query($con, $sql);
    redirect('estado/pesquisar?deuboa=1');
}
?>
