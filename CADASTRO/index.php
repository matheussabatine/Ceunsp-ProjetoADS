<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--CSS PROGRAMA-->
    <link rel="stylesheet" href="cadastro.css">

    <!--SCRIPT PARA VALIDAR SENHAS-->
    <script>
      function senhas(){
        var senha = formname.senha.value;
        var confirm_senha = formname.confirm_senha.value;

        if (senha != confirm_senha){
          alert ('Senhas São Diferentes');
          formname.senha.focus();
          return false;
        }
      }
    </script>

    <title>Cadastro de novo cliente</title>
  </head>
  <body>

    <div class="container">

      <div class="title">CADASTRO DE CLIENTE</div>

      <form action="cadastrar.php" name="formname" method="POST" class="row g-3 needs-validation">

        <!--1 LINHA-->
        <div class="col-md-8">
          <label for="nome" class="form-label">Nome Completo</label>
          <input name="nome" type="text" class="form-control" id="nome" autofocus required>
        </div>

        <div class="col-md-4">
          <label for="sexo-masc" class="form-label">Sexo</label>

        <div class="custom-control custom-radio">
            <input value="Masculino" type="radio" id="sexo-masc" name="sexo" class="custom-control-input" checked>
            <label class="custom-control-label" for="sexo-masc">Masculino</label>
        </div>
        
        <div class="custom-control custom-radio">
            <input value="Feminino" type="radio" id="sexo-femi" name="sexo" class="custom-control-input">
            <label class="custom-control-label" for="sexo-femi">Feminino</label>
        </div>

        </div>

        <!--2 LINHA-->

        <div class="col-md-3">

          <label for="estados" class="form-label">Estado</label>
          <select name="estados" class="form-select" id="estados" required>
            <option selected disabled value="">Selecionar</option>
            <option value="AC">Acre</option>
	          <option value="AL">Alagoas</option>
	          <option value="AP">Amapá</option>
	          <option value="AM">Amazonas</option>
	          <option value="BA">Bahia</option>
	          <option value="CE">Ceará</option>
	          <option value="DF">Distrito Federal</option>
	          <option value="ES">Espírito Santo</option>
	          <option value="GO">Goiás</option>
	          <option value="MA">Maranhão</option>
	          <option value="MT">Mato Grosso</option>
	          <option value="MS">Mato Grosso do Sul</option>
	          <option value="MG">Minas Gerais</option>
	          <option value="PA">Pará</option>
	          <option value="PB">Paraíba</option>
	          <option value="PR">Paraná</option>
	          <option value="PE">Pernambuco</option>
	          <option value="PI">Piauí</option>
	          <option value="RJ">Rio de Janeiro</option>
	          <option value="RN">Rio Grande do Norte</option>
	          <option value="RS">Rio Grande do Sul</option>
	          <option value="RO">Rondônia</option>
	          <option value="RR">Roraima</option>
	          <option value="SC">Santa Catarina</option>
	          <option value="SP">São Paulo</option>
	          <option value="SE">Sergipe</option>
	          <option value="TO">Tocantins</option>
          </select>
    
        </div>
        <div class="col-md-3">

          <label for="cidade" class="form-label">Cidade</label>
          <input name="cidade" type="text" class="form-control" id="cidade" required>
    
        </div>
        <div class="col-md-6">

          <label for="endereco" class="form-label">Endereço</label>
          <input name="endereco" type="text" class="form-control" id="endereco" placeholder="(BAIRRO/RUA/NÚMERO)" required>

        </div>

        <!--3 LINHA-->

        <div class="col-8">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="email" required>
        </div>
        <div class="col-4">
          <label for="celular" class="form-label">Celular</label>
          <input name="celular" type="tel" class="form-control" id="celular" pattern="[0-9]{11}" placeholder="DDD+9 dígitos" required>
        </div>

        <!--4 LINHA-->

        <div class="col-md-5">
            <label for="senha" class="form-label">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="APENAS NÚMEROS" required>
        </div>
        
        <div class="col-md-5">
          <label for="senha-confirmar" class="form-label">Confirmar Senha</label>
          <input name="confirm_senha" type="password" class="form-control" id="senha-confirmar" required>
      </div>
        

        <!--5 LINHA-->

        <div class="col-12 text-center">
          <button class="btn btn-success btn-lg" type="submit" onclick="return senhas()">Validar</button>
        </div>
      </form>

      <br>

      <div class="d-grid gap-2">
        
        <?php
        if(isset($_SESSION['email_existe'])):
        ?>
        <button class="btn btn-primary" type="button">CADASTRO JÁ EXISTENTE</button>
        <?php
        endif;
        unset($_SESSION['email_existe']);
        ?>

        <?php
        if(isset($_SESSION['status_cadastro'])):
        ?>
        <button class="btn btn-success" type="button">CADASTRADO COM SUCESSO<a style="color: blue;"href="../LOGIN/index.php"> RETORNAR</a></button>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>

      </div>
      
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>