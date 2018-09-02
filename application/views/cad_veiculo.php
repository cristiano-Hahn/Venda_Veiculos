
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
</head>
			
			
<body>

<?php
include "menu.php";
include "conecta.php";

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
                          <form action="<?php echo site_url("veiculo/adicionar")?>" method="POST">
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
                                <li class="list-group-item list-group-item-info"><h4>Cadastro de Veiculos</h4></li>
                                </center>
                            </ul>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label> Placa</label>
                                        <input type="text" class="form-control" name="placa" required/>
                                    </div>
                                    <div class="form-line">
                                        <label> Ano</label>
                                        <input type="number" class="form-control" name="ano" required/>
                                    </div>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <label> Marca</label>
                                        <br>
                                        <select name="marca" >
                                            <option>Selecione a marca...</option>
                                            <?php
                                                $sql= mysqli_query($con, 'select * from marca');
                                                while ( $query2 = mysqli_fetch_array($sql))   {
                                                ?>
                                                <option value="<?php echo $query2['idmarca']; ?>">
                                                <?php echo $query2['marca']; ?></option>";
                                        <?php
                                                }
                                        ?> 
                                        </select>
                                        <br>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <label> Município</label>
                                        <br>
                                        <select name="municipio" >
                                            <option>Selecione o município...</option>
                                            <?php
                                                $sql= mysqli_query($con, 'select * from municipio');
                                                while ( $query2 = mysqli_fetch_array($sql))   {
                                                ?>
                                                <option value="<?php echo $query2['idmunicipio']; ?>">
                                                <?php echo $query2['municipio']; ?></option>";
                                        <?php
                                                }
                                        ?> 
                                        </select>
                                    </div>
                                            </div>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <label> Proprietário</label>
                                        <br>
                                        <select name="proprietario" >
                                            <option>Selecione o Proprietário...</option>
                                            <?php
                                                $sql= mysqli_query($con, 'select * from proprietario');
                                                while ( $query2 = mysqli_fetch_array($sql))   {
                                                ?>
                                                <option value="<?php echo $query2['idproprietario']; ?>">
                                                <?php echo $query2['proprietario']; ?></option>";
                                        <?php
                                                }
                                        ?> 
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <label> Categoria</label>
                                        <br>
                                        <select name="categoria" >
                                            <option>Selecione a categoria...</option>
                                            <?php
                                                $sql= mysqli_query($con, 'select * from categoria');
                                                while ( $query2 = mysqli_fetch_array($sql))   {
                                                ?>
                                                <option value="<?php echo $query2['idcategoria']; ?>">
                                                <?php echo $query2['categoria']; ?></option>";
                                        <?php
                                                }
                                        ?> 
                                        </select>
                                        </div>
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