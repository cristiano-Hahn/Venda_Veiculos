<!DOCTYPE html>
<html>

<head>
	<script>
	
	$('body').on('hidden.bs.modal', '.modal', function () {
				$(this).removeData('bs.modal').find(".modal-content").html("");
			});
			
			</script>
			</head>
<body>

<b>	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	    </div>
	  </div>
	</div>
<?php
include "menu.php";
include "conecta.php";
?>

    <section class="content">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="panel panel-info">
                        <div class="panel-heading">
                        <center>
                        <h3>
                         Pesquisa de Categorias Cadastradas
                            </h3>
                            </center>
                        </div>
                       
                    </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Categoria</th>
                                            <th>Opções</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    $sql = "select * from categoria order by idcategoria ASC";
	
     $editar = mysqli_query($con, $sql);
     
     @session_start();
     if  ($_SESSION['nivel'] =='ADMINISTRADOR'){
         $botao = 'enabled';
     }else{
         $botao = 'disabled';  
     }
 

    while ($l = mysqli_fetch_array($editar)){	
        $vcodigo = $l['idcategoria'];  
	    $Vcategoria= $l['categoria'];

    
	    echo "
            <tr>
                <td> $vcodigo </td> 
                <td align=right> $Vcategoria</td>
                <center>  
                <td align=center> 
                    <a href='../categoria/editar?codigo=$vcodigo' data-toggle=modal data-target=#myModal>
                        <button type='button' class='btn btn-primary btn-xs' $botao>Visualizar Cadastro</button> 
                    </a> 
                </td>";
    }
    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
    </section>

</body>

</html>