
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head></head>			
<body>

<?php
  include 'conecta.php';
  include 'extensao.php';
    if(!empty($_GET["codigo"])){
        $codigo =$_GET["codigo"];
    }else{
        $codigo =0;  
    }
    $sql = mysqli_query($con, "select idveiculo, placa, ano from veiculo where idveiculo = '$codigo' " );
    list($aaa, $placa, $ano) = mysqli_fetch_row($sql );
?>

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> 
        <div class="card">
            <a href="../veiculo/pesquisar">
                <button type="button" class="close"  aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </a>
            <div class="body">
                <form action="<?php echo site_url("veiculo/adicionar")?>" method="POST">
                    <div class="row clearfix">
                        <div class="body">
                            <ul class="list-group">
                                <center>
                                    <li class="list-group-item list-group-item-info"><h4>Edição de veiculos</h4></li>
                                </center>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <div class="form-line">
                                    <label> Placa</label>
                                    <input type="text" value=<?php echo( $placa )?> class="form-control" name="placa" required>
                                    <input type="hidden" value=<?php echo( $codigo )?> class="form-control" name="codigo" required>
                                </div>
                                <div class="form-line">
                                    <label> Ano</label>
                                    <input type="text" value=<?php echo( $ano )?> class="form-control" name="ano" required>
                
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
                        <button type="submit" class="btn btn-success waves-effect">Salvar</button>  
                        <?php
                            echo "<a href=../veiculo/excluir?codigo=$codigo";
                        ?>
                            <button  class="btn btn-danger waves-effect">Excluir</button>     
                        </a>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>