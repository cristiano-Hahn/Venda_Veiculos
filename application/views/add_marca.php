<?php

include 'conecta.php';
 
$nome =$_POST["nome"];


if(!empty($_POST["codigo"])){
    $codigo =$_POST["codigo"];
}else{
    $codigo =0;  
}


if ($codigo == 0){
    $sql = "insert into marca(marca) 
    values('$nome')";
    mysqli_query($con, $sql);
    redirect('marca/cadastrar?deuboa=1');
}else{
    $sql = "update marca set marca = '$nome' where idmarca = '$codigo'";
    mysqli_query($con, $sql);
    redirect('marca/pesquisar?deuboa=1');
}
?>
