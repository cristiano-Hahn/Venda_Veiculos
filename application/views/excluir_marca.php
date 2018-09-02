<?php

include 'conecta.php';
 
$codigo =$_GET["codigo"];




$sql = "delete from marca where idmarca= $codigo ";
mysqli_query($con, $sql);
    
redirect('marca/pesquisar?excluiu=1');
  
   

?>
