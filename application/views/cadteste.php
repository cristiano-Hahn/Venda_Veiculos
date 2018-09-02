
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
			</head>
			
			
<body>

<?php
include "menu.php";


?>
    <section class="content">
        <div class="container-fluid">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <form action="<?php echo site_url("cadastros/adicionarteste")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro Teste</h4></li>
                                </center>
                            </ul>
                        </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Nome</label>
                                            <input type="text" class="form-control" name="nome" required>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Idade</label>
                                            <input type="number" class="form-control" name="idade"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Cidade </label>
                                            <input type="text" class="form-control" name="cidade">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Estado</label>
                                            <input type="text" class="form-control" name="estado" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Pais</label>
                                        <select class="form-control" name="pais">
                                        <option value="Brasil">Brasil</option>
                                       <option value="Estados Unidos">Estados Unidos</option>
                                        <option value="Uruguai">Uruguai</option>
                                    </select>
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