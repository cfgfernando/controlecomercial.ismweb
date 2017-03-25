<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <h3>Novo usuários</h3>
                <hr />
                <ol class="breadcrumb">
                  <li><a href="/">Principal</a></li>
                  <li><a href="/usuarios">Lista de usuários</a></li>
                  <li class="active">Novo usuários</li>
                </ol>

            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <?php erros_validacao() ?>
            </div>
        </div>

        <!-- formulario de novo registro -->
        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form id="form_add" name="form_add" action="" class="" method="post">
                    <div class="form-group">
                        <label>Tipo de usuário</label>
                        <select name="tipo_usuario" 
                            class="form-control">
                            <option value="1">Administrador</option>
                            <option value="2">Vendedor</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nome do usuário</label>
                        <input type="text" 
                            class="form-control" 
                            name="nome_usuario" 
                            value="<?php echo set_value('nome_usuario') ?>" 
                            placeholder="Nome usuário">
                    </div>

                    <div class="form-group">
                        <label>Email</label> 
                        <input type="email" 
                            class="form-control"
                            name="email_usuario" 
                            value="<?php echo set_value('email_usuario') ?>" 
                            placeholder="E-mail do usuário">
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" 
                            class="form-control" 
                            name="senha_usuario" 
                            placeholder="Senha de acesso">
                    </div>

                    <div class="form-group">
                        <label>Repetir senha</label>
                        <input type="password" 
                            class="form-control" 
                            name="senha_usuario2" 
                            placeholder="Repetir senha">
                    </div>
 
                    <button 
                        form="form_add"
                        type="submit" 
                        class="btn btn-success">ENTRAR</button>
                        </form>
            </div>
        </div><!-- / formulario de novo registro -->

    </div>
</div>