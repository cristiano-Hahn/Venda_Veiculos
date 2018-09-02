
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
    $sql = mysqli_query($con, "select * from estado where idestado = '$codigo' " );
    list($aaa, $estado) = mysqli_fetch_row($sql );
?>

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> 
        <div class="card">
            <a href="../estado/pesquisar">
                <button type="button" class="close"  aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </a>
            <div class="body">
                <form action="<?php echo site_url("estado/adicionar")?>" method="POST">
                    <div class="row clearfix">
                        <div class="body">
                            <ul class="list-group">
                                <center>
                                    <li class="list-group-item list-group-item-info"><h4>Edição de estados</h4></li>
                                </center>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label> Estado</label>
                                    <input type="text" value=<?php echo( $estado )?> class="form-control" name="nome" required>
                                    <input type="hidden" value=<?php echo( $codigo )?> class="form-control" name="codigo" required>
                                </div>
                            </div>
                        </div>                    
                    </div>  
                    <center>
                        <button type="submit" class="btn btn-success waves-effect">Salvar</button>  
                        <?php
                            echo "<a href=../estado/excluir?codigo=$codigo";
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