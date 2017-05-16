<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Novo Cliente</h3>
                <hr />
                <ol class="breadcrumb">
                  <li><a href="/">Principal</a></li>
                  <li><a href="/clientes">Lista de Clientes</a></li>
                  <li class="active">Novo Cliente</li>
                </ol>

            </div>
        </div>
        <!-- /.row -->

        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <?php 
                erros_validacao();
                get_msg('msgerros');
                get_msg('msgsucess');
            ?>

            </div>
        </div>

        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <form class="" id="form" name="form" method="POST">

                <div class="form-group">
                    <label>Pessoa Física
                         <input type="radio" name="tipo" id="pf" checked="checked" value="1">
                    </label>
                     <label>Pessoa Jurídica
                         <input type="radio" name="tipo" id="pj" value="2">
                    </label>
                </div>
                
                <div class="form-group">
                    <label>Nome completo</label>
                        <input type="text" class="form-control" name="nome"
                            value="<?php echo set_value('nome') ?>"
                            placeholder="Nome completo" required>
                </div>
                                        
                <div class="form-group">
                    <label>Data de nascimento</label>
                        <input type="text" class="form-control" name="data_nascimento"
                            value="<?php echo set_value('data_nascimento') ?>"
                            placeholder="Data de nascimento">
                </div>

                 <div class="form-group">
                    <label class="pf">CPF</label>
                    <label class="pj">CNPJ</label>
                    <input type="text" class="form-control" name="cpf_cnpj"
                            value="<?php echo set_value('cpf_cnpj') ?>"
                            
                </div>

                 <div class="form-group">
                    <label class="pf">RG</label>
                    <label class="pj">IE</label>
                    <input type="text" class="form-control" name="rg_ie"
                            value="<?php echo set_value('rg_ie') ?>"
                           
                </div>

                 <div class="form-group">
                    <label>E-mail</label>
                        <input type="text" class="form-control" name="email"
                            value="<?php echo set_value('email') ?>"
                            placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label>Telefone</label>
                        <input type="text" class="form-control" name="telefone"
                            value="<?php echo set_value('telefone') ?>"
                            placeholder="Telefone">
                </div>



                <div class="form-group">
                    <label>CEP</label>
                        <input type="text" class="form-control" name="cep"
                            value="<?php echo set_value('cep') ?>"
                            placeholder="CEP">
                </div>

                <div class="form-group">
                    <label>Endereço</label>
                        <input type="text" class="form-control" name="endereco"
                            value="<?php echo set_value('endereco') ?>"
                            placeholder="Endereço">
                </div>

                <div class="form-group">
                    <label>Número</label>
                        <input type="text" class="form-control" name="numero"
                            value="<?php echo set_value('numero') ?>"
                            placeholder="Número">
                </div>

                <div class="form-group">
                    <label>Bairro</label>
                        <input type="text" class="form-control" name="bairro"
                            value="<?php echo set_value('bairro') ?>"
                            placeholder="Bairro">
                </div>

                
                <div class="form-group">
                    <label>Complemento</label>
                        <input type="text" class="form-control" name="complemento"
                            value="<?php echo set_value('complemento') ?>"
                            placeholder="Complemento">
                </div>

                <div class="form-group">
                    <label>Cidade</label>
                        <input type="text" class="form-control" name="cidade"
                            value="<?php echo set_value('cidade') ?>"
                            placeholder="Cidade">
                </div>

                <div class="form-group">
                    <label>Estado</label>
                        <input type="text" class="form-control" name="estado"
                            value="<?php echo set_value('estado') ?>"
                            placeholder="Estado">
                </div>

                <div class="form-group pf">
                    <label>Nome da Mãe</label>
                        <input type="text" class="form-control" name="nome_mae"
                            value="<?php echo set_value('nome_mae') ?>"
                            placeholder="Nome da mãe">
                </div>

                <div class="form-group pf">
                    <label>Nome do Pai</label>
                        <input type="text" class="form-control" name="nome_pai"
                            value="<?php echo set_value('nome_pai') ?>"
                            placeholder="Nome do pai">
                </div>

                <div class="form-group">
                    <label>Observação</label>
                    <textarea name="obs" class="form-control" <?php echo set_value('obs')?> > </textarea>
                </div>

                
                <div class="form-group">
                    <label>Ativo</label>
                        <input type="text" class="form-control" name="ativo"
                            value="<?php echo set_value('ativo') ?>"
                            placeholder="Ativo">
                </div>

                <input type="hidden" value="" name="id_config">
                <button form="form" type="submit" class="btn btn-success">SALVAR</button>

            </form>

            </div>

        </div>


        </div>
</div>