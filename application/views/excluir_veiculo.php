<?php

include 'conecta.php';
 
$codigo =$_GET["codigo"];




$sql = "delete from veiculo where idveiculo = $codigo ";
mysqli_query($con, $sql);
    
redirect('veiculo/pesquisar?excluiu=1');
  
   

?>
