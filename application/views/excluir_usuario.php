<?php

include 'conecta.php';
 
$codigo =$_GET["codigo"];




$sql = "delete from usuario where cod_usuario = $codigo ";
mysqli_query($con, $sql);
    
redirect('usuario/pesquisar?excluiu=1');
  
   

?>
