<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <h3>Usários cadastrados</h3>
                <hr />
                <ol class="breadcrumb">
                  <li><a href="/">Principal</a></li>
                  <li class="active">Usuários cadastrados</li>
                </ol>

            </div>
        </div>
        <!-- /.row -->

        <!-- Botão novo usuário -->
        <div class="row margin-bottom10">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                <a href="<?php echo site_url('usuarios/add')?>" title="Novo usuário" class="btn btn-success">
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
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th class="text-center">Status</th>
                            <th class="text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($users as $user) { 

                                if ($user->id != 1) {
                                     echo '<tr>
                                        <td>'.$user->id.'</td>
                                        <td>'.$user->username.'</td>
                                        <td>'.$user->email.'</td>
                                        <td class="text-center">'.($user->active == 1 ? '<a href="/usuarios/active/'.$user->id.'" title="Deixar inativo" class="btn btn-success btn-xs">Ativo</a>' : '<a href="/usuarios/active/'.$user->id.'" title="Deixar Ativo" class="btn btn-danger btn-xs">Inativo</a>').'</td>
                                        <td class="text-right"><a href="/usuarios/edit/'.$user->id.'" title="Editar usuário" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="/usuarios/del/'.$user->id.'" title="Apagar usuário" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>';
                                } else {
                                    if ($this->session->user_id == 1) {
                                        
                                        echo '<tr>
                                        <td>'.$user->id.'</td>
                                        <td>'.$user->username.'</td>
                                        <td>'.$user->email.'</td>
                                        <td class="text-center">Root</td>
                                        <td class="text-right"><a href="/usuarios/edit/'.$user->id.'" title="Editar usuário" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="/usuarios/del/'.$user->id.'" title="Apagar usuário" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>';

                                    }
                                }                
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