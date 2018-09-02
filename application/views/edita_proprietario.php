
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
    $sql = mysqli_query($con, "select proprietario, 
    endereco, 
    bairro,
    cpf,
    telefone,
    rg,
    datanascimento
    from proprietario where idproprietario = '$codigo' " );
    list($proprietario,
    $endereco,
    $bairro,
    $cpf,
    $telefone,
    $rg,
    $datanascimento,
    ) = mysqli_fetch_row($sql );
?>

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> 
        <div class="card">
            <a href="../proprietario/pesquisar">
                <button type="button" class="close"  aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </a>
            <div class="body">
                <form action="<?php echo site_url("proprietario/adicionar")?>" method="POST">
                    <div class="row clearfix">
                        <div class="body">
                            <ul class="list-group">
                                <center>
                                    <li class="list-group-item list-group-item-info"><h4>Edição de proprietarios</h4></li>
                                </center>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <div class="form-line">
                                    <label> Proprietario</label>
                                    <input type="text" value=<?php echo( $proprietario )?> class="form-control" name="nome" required>
                                    <input type="hidden" value=<?php echo( $codigo )?> class="form-control" name="codigo" required>
                                </div>
                                <div class="form-line">
                                    <label> Endereço</label>
                                    <input type="text" value=<?php echo( $endereco )?> class="form-control" name="endereco" required>
                                </div>
                                <div class="form-line">
                                    <label> Bairro</label>
                                    <input type="text" value=<?php echo( $bairro )?> class="form-control" name="bairro" required>
                                </div>
                                <div class="form-line">
                                    <label> CPF</label>
                                    <input type="text" value=<?php echo( $cpf )?> class="form-control" name="cpf" required>
                                </div>
                                <div class="form-line">
                                    <label> Telefone</label>
                                    <input type="text" value=<?php echo( $telefone )?> class="form-control" name="telefone" required>
                                </div>
                                <div class="form-line">
                                    <label> RG</label>
                                    <input type="text" value=<?php echo( $rg )?> class="form-control" name="rg" required>
                                </div>
                                <div class="form-line">
                                    <label> Data de nascimento</label>
                                    <input type="date" value=<?php echo( $datanascimento )?> class="form-control" name="datanascimento" required>
                                </div>
                            </div>
                        </div>                    
                    </div>  
                    <center>
                        <button type="submit" class="btn btn-success waves-effect">Salvar</button>  
                        <?php
                            echo "<a href=../proprietario/excluir?codigo=$codigo";
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