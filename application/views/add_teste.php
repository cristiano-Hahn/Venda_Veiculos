<?php

include 'conecta.php';
 
$nome =$_POST["nome"];
$idade =$_POST["idade"];
$cidade =$_POST["cidade"];
$estado =$_POST["estado"];
$pais =$_POST["pais"];





$sql = "insert into teste(nome,idade,cidade,estado,pais) 
values('$nome','$idade','$cidade','$estado','$pais')";

mysqli_query($sql);
    
redirect('cadastros/teste');
  
   

?>
