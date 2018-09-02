<?php

include 'conecta.php';
 
$codigo =$_GET["codigo"];




$sql = "delete from estado where idestado= $codigo ";
mysqli_query($con, $sql);
    
redirect('estado/pesquisar?excluiu=1');
  
   

?>
