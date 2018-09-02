<?php
include "conecta.php";
$login=strtoupper($_POST["login"]);
$senha=$_POST["senha"];
$consulta = mysqli_query($con,"select nivel from  usuario where login='$login' and senha='$senha'");

$linha = mysqli_num_rows($consulta);
	if($linha==0) {
		echo"<script>alert('Usuario ou senha Invalidos');</script>";
    	redirect('primeiro/index');
    }
 	else{ 	
		list($nivel) = mysqli_fetch_row($consulta);
		session_start();
		$_SESSION['nivel'] = $nivel;
		redirect('chamar/paginaprincipal');
	}
?>
