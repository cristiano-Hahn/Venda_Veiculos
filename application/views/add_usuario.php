<?php

include 'conecta.php';
 
$nome =$_POST["nome"];
$login =$_POST["login"];
$senha =$_POST["senha"];
$nivel =$_POST["nivel"];


if(!empty($_POST["codigo"])){
    $codigo =$_POST["codigo"];
}else{
    $codigo =0;  
}


if ($codigo == 0){
    $sql = "insert into usuario(nome, login, senha, nivel) 
    values('$nome','$login','$senha','$nivel')";
    mysqli_query($con, $sql);
    redirect('usuario/cadastrar?deuboa=1');
}else{
    $sql = "update usuario set nome = '$nome',login = '$login',senha = '$senha',NIVEL = '$nivel' where cod_usuario = '$codigo'";
    mysqli_query($con, $sql);
    redirect('usuario/pesquisar?deuboa=1');
}
?>
