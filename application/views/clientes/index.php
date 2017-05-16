<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <h3>Clientes cadastrados</h3>
                <hr />
                <ol class="breadcrumb">
                  <li><a href="/">Principal</a></li>
                  <li class="active">Clientes cadastrados</li>
                </ol>

            </div>
        </div>
        <!-- /.row -->

        <!-- Botão novo usuário -->
        <div class="row margin-bottom10">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                <a href="<?php echo site_url('clientes/add')?>" title="Novo cliente" class="btn btn-success">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>
            </div>
        </div> <!-- / Botão novo usuário -->

        <div class="row margin-bottom10">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                    get_msg('msgerro');
                    get_msg('msgsucess');
                ?>
            </div>
        </div>


        <!-- Lista de registro -->
        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <table class="table table-bordered table-striped" id="datatable">     
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th class="text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($clientes as $cliente) { 

                                echo '<tr>
                                <td>'.$cliente->id_cliente.'</td>
                                <td>'.$cliente->nome.'</td>
                                <td>'.$cliente->email.'</td>
                                <td>'.$cliente->telefone.'</td>
                                <td class="text-right"><a href="/clientes/edit/'.$cliente->id_cliente.'" title="Editar cliente" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="/clientes/del/'.$cliente->id_cliente.'" title="Apagar cliente" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>';
                            }
                        ?>                        
                    </tbody>
                  </table>
            </div>
        </div><!-- / Lista de registro -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->