
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
    $sql = mysqli_query($con, "select cod_usuario, nome, login, senha, NIVEL from usuario where cod_usuario = '$codigo' " );
    list($aaa, $nome, $login, $senha, $nivel) = mysqli_fetch_row($sql );
?>

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> 
        <div class="card">
            <a href="../usuario/pesquisar">
                <button type="button" class="close"  aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </a>
            <div class="body">
                <form action="<?php echo site_url("usuario/adicionar")?>" method="POST">
                    <div class="row clearfix">
                        <div class="body">
                            <ul class="list-group">
                                <center>
                                    <li class="list-group-item list-group-item-info"><h4>Edição de usuarios</h4></li>
                                </center>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <div class="form-line">
                                    <label> Nome</label>
                                    <input type="text" value=<?php echo( $nome )?> class="form-control" name="nome" required>
                                    <input type="hidden" value=<?php echo( $codigo )?> class="form-control" name="codigo" required>
                                </div>
                                <div class="form-line">
                                    <label> Login</label>
                                    <input type="text" value=<?php echo( $login )?> class="form-control" name="login" required>
                                </div>
                                <div class="form-line">
                                    <label> Senha</label>
                                    <input type="password" value=<?php echo( $senha )?> class="form-control" name="senha" required>
                                </div>
                                <div class="form-line">
                                    <label> Nível</label>
                                    <select type="text" class="form-control" name="nivel" required>    
                                            <option value="ADMINISTRADOR"> Administrador</option>
                                            <option value="USUARIO"> Usuário</option>
                                    </select>
                                </div>
                            </div>
                        </div>                    
                    </div>  
                    <center>
                        <button type="submit" class="btn btn-success waves-effect">Salvar</button>  
                        <?php
                            echo "<a href=../usuario/excluir?codigo=$codigo";
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