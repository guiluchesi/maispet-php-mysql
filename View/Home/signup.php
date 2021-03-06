<?php

    $caminhoUrl = $_SERVER['DOCUMENT_ROOT']."/maispet";
    require_once($caminhoUrl."/View/includes/header.php");

    $success = false;
    require_once($caminhoUrl."/Controller/ProprietariosController.php");

?>

    <!-- Main -->
    <div class="main" role="main">

      <!-- Page Heading -->
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1>Crie uma conta</h1>
            </div>
            <div class="col-md-6">
              <ul class="breadcrumb">
                <li><a href="?pagina=index">Inicial</a></li>
                <li class="active">Criar Conta</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Heading / End -->

      <!-- Page Content -->
      <section class="page-content">
        <div class="container">
          
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <!-- Profile Form -->
              <form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">

                
                <?php

                    if($success == true) {?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <strong>Cadastro Realizado!</strong> Obrigado por se cadastrar. <br><a href="?pagina=login">Clique aqui para fazer login.</a>
                      </div>
                    <?php
                  }
                ?>
                <!-- Job Information Fields -->
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Nome</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value="" required/>
                  </div>
                </fieldset>

                <fieldset>
                  <label>Email <span class="required">*</span></label>
                  <div class="field">
                    <input type="email" class="form-control" name="email" id="account_email" placeholder="you@yourdomain.com" value=""  required/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-job_title">
                  <label for="job_title">Senha</label>
                  <div class="field">
                    <input type="password" class="form-control" name="pass" id="pass" onkeyup="validarSenha()" placeholder="" value="" required/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-job_title">
                  <label for="job_title">Confirmar Senha</label>
                  <div class="field">
                    <input type="password" class="form-control" name="pass2" id="pass2" onkeyup="validarSenha()" placeholder="" value="" required/>
                    <span id="resultado">&nbsp;</span>
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">CPF</label>
                  <div class="field">
                    <input type="text" id="cpf" class="form-control" name="document" placeholder="" value="" required/>
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Data de Aniversário</label>
                  <div class="field">
                    <input type="text" id="campoData" class="form-control" name="birthdayDate" placeholder="10/10/1990" value="" required/>
                  </div>
                </fieldset>


                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="fieldset-job_type">
                      <label for="job_type">Sexo</label>
                      <div class="field select-style">
                        <select name="sex" id="job_type" class="form-control" required>
                          <option value="Feminino">Feminino</option>
                          <option value="Masculino">Masculino</option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                </div>                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Endereço</label>
                  <div class="field">
                    <input type="text" class="form-control" name="street" id="job_title" placeholder="" value="" required/>
                  </div>
                </fieldset>


                <fieldset class="fieldset-job_title">
                  <label for="job_title">Cidade</label>
                  <div class="field">
                    <input type="text" class="form-control" name="city" id="job_title" placeholder="" value="" required/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-job_title">
                  <label for="job_title">Bairro</label>
                  <div class="field">
                    <input type="text" class="form-control" name="neighborhood" id="job_title" placeholder="" value="" required/>
                  </div>
                </fieldset>


                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="fieldset-job_type">
                      <label for="job_type">Estado</label>
                      <div class="field select-style">
                        <select name="state" id="job_type" class="form-control" required>
                          <option value="AC">AC</option>
                          <option value="AL">AL</option>
                          <option value="AP">AP</option>
                          <option value="AM">AM</option>
                          <option value="BA">BA</option>
                          <option value="CE">CE</option>
                          <option value="DF">DF</option>
                          <option value="ES">ES</option>
                          <option value="GO">GO</option>
                          <option value="MA">MA</option>
                          <option value="MT">MT</option>
                          <option value="MS">MS</option>
                          <option value="MG">MG</option>
                          <option value="PA">PA</option>
                          <option value="PB">PB</option>
                          <option value="PR">PR</option>
                          <option value="PE">PE</option>
                          <option value="PI">PI</option>
                          <option value="RJ">RJ</option>
                          <option value="RN">RN</option>
                          <option value="RS">RS</option>
                          <option value="RO">RO</option>
                          <option value="RR">RR</option>
                          <option value="SC">SC</option>
                          <option value="SP">SP</option>
                          <option value="SE">SE</option>
                          <option value="TO">TO</option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                </div>


                <fieldset class="fieldset-job_title">
                  <label for="job_title">Celular</label>
                  <div class="field">
                    <input type="text" id="cel" class="form-control" name="phone" placeholder="" value="" required/>
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Telefone</label>
                  <div class="field">
                    <input type="text" id="tel" class="form-control" name="phoneHouse" placeholder="" value=""/>
                  </div>
                </fieldset>

                <div class="spacer"></div>

                <p>
                  <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar &rarr;" />
                </p>

              </form>
            </div>
          </div>

        </div>
      </section>
      <!-- Page Content / End -->


<?php
    require_once($caminhoUrl."/View/includes/footer-Registers.php");
?>
  