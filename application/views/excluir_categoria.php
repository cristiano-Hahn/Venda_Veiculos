<?php

include 'conecta.php';
 
$codigo =$_GET["codigo"];




$sql = "delete from categoria where idcategoria = $codigo ";
mysqli_query($con, $sql);
    
redirect('categoria/pesquisar?excluiu=1');
  
   

?>
