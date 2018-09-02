<?php

include 'conecta.php';
 
$codigo =$_GET["codigo"];




$sql = "delete from municipio where idmunicipio= $codigo ";
mysqli_query($con, $sql);
    
redirect('municipio/pesquisar?excluiu=1');
  
   

?>
