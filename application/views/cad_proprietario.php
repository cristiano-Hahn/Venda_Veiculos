
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
			</head>
			
			
<body>

<?php
include "menu.php";

    if(!empty($_GET["deuboa"])){

        $deuboa =$_GET["deuboa"];
    }else{
            $deuboa =0;  
    }
?>
    <section class="content">
        <div class="container-fluid">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <form action="<?php echo site_url("proprietario/adicionar")?>" method="POST">
                            <div class="row clearfix">
                            <div class="body">
                            <div>
                                <?php 
                                
                                if($deuboa == 1){
                                    echo('
                                    <div class="alert alert-success" role="alert">
                                        Cadastro efetuado com sucesso!
                                    </div>');
                                }
                                
                                ?>
                            </div>
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro de marcas</h4></li>
                                </center>
                            </ul>
                        </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label> Nome</label>
                                        <input type="text" class="form-control" name="nome" required> 
                                    </div>
                                    <div class="form-line">
                                        <label> Endereço</label>
                                        <input type="text" class="form-control" name="endereco" required> 
                                    </div>
                                    <div class="form-line">
                                        <label> Bairro</label>
                                        <input type="text" class="form-control" name="bairro" required> 
                                    </div>
                                    <div class="form-line">
                                        <label> Cpf</label>
                                        <input type="text" class="form-control" name="cpf" required> 
                                    </div>
                                    <div class="form-line">
                                        <label> Telefone</label>
                                        <input type="text" class="form-control" name="telefone" required> 
                                    </div>
                                    <div class="form-line">
                                        <label> RG</label>
                                        <input type="text" class="form-control" name="rg" required> 
                                    </div>
                                    <div class="form-line">
                                        <label> Data de nascimento</label>
                                        <input type="date" class="form-control" name="bairro" required> 
                                    </div>
                                </div>
                            </div>                    
                        </div>  
                    <center>
                        <button type="submit" class="btn btn-success waves-effect">Cadastrar</button>     
                    </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
    </section>

</body>

</html>