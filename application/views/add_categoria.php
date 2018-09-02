<?php

include 'conecta.php';
 
$nome =$_POST["categoria"];


if(!empty($_POST["codigo"])){
    $codigo =$_POST["codigo"];
}else{
    $codigo =0;  
}


if ($codigo == 0){
    $sql = "insert into categoria(categoria) 
    values('$nome')";
    mysqli_query($con, $sql);
    redirect('categoria/cadastrar?deuboa=1');
}else{
    $sql = "update categoria set categoria = '$nome' where idcategoria = '$codigo'";
    mysqli_query($con, $sql);
    redirect('categoria/pesquisar?deuboa=1');
}
?>
