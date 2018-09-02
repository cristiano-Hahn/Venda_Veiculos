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
                         Pesquisa de Proprietários Cadastrados
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
                                            <th>Nome</th>
                                            <th>Endereço</th>
                                            <th>Bairro</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>RG</th>
                                            <th>Data de nascimento</th>
                                            <th>Opções</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    $sql = "select * from proprietario order by idproprietario ASC";
	
     $editar = mysqli_query($con, $sql);
     
     @session_start();
     if  ($_SESSION['nivel'] =='ADMINISTRADOR'){
         $botao = 'enabled';
     }else{
         $botao = 'disabled';  
     }
 

    while ($l = mysqli_fetch_array($editar)){	
        $vcodigo = $l['idproprietario'];  
        $Vproprietario= $l['proprietario'];
        $Vendereco= $l['endereco'];
        $Vbairro= $l['bairro'];
        $Vcpf= $l['proprietario'];
        $Vtelefone= $l['telefone'];
        $Vrg= $l['rg'];
        $Vdatanascimento= $l['datanascimento'];

    
	    echo "
            <tr>
                <td> $vcodigo </td> 
                <td align=right> $Vproprietario</td>
                <td align=right> $Vendereco</td>
                <td align=right> $Vbairro</td>
                <td align=right> $Vcpf</td>
                <td align=right> $Vtelefone</td>
                <td align=right> $Vrg</td>
                <td align=right> $Vdatanascimento</td>
                <center>  
                <td align=center> 
                    <a href='../proprietario/editar?codigo=$vcodigo' data-toggle=modal data-target=#myModal>
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