<?php session_start();
include_once('../CONECTOR/conexao.php');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitrine</title>

    

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--JQUERY Gooogle CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		

     <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <style>
      div.quantity{
    display: flex;
    justify-content: center;
}


div.quantity button{
    width: 45px;
    height: 45px;
    border: 1px solid rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    border-radius: 0;
    background: #fff;
}

div.quantity input{
    border: none;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    text-align: center;
    width: 100px;
    font-size: 20px;
    color: #000;
    font-weight: 300;
}
    </style>
</head>
<body>

    <!--botão de guardar/revelar sidebar-->
    <div class="botao">
        <span class='bx bx-left-arrow'></span> 
    </div>

    <!--INÍCIO da sidebar-->
    <nav class="sidebar">
        <div class="text"><span class='bx bxs-t-shirt'></span> Brechó</div>
        <!--Items da sidebar-->
        <ul>
            <!--parte cancelada<li>
                <a href="#" class="pasta-homem"><i class='bx bx-male-sign'></i> Masculino
                    <span class='bx bxs-down-arrow seta-homem'></span>
                </a>
                pasta masculina
                <ul class="moda-homem">
                    <li><a href="javascript:BuscarProdutos('masc infantil')">Infantil</a></li>
                    <li><a href="javascript:BuscarProdutos('masc jovem')">Jovem</a></li>
                    <li><a href="javascript:BuscarProdutos('masc adulto')">Adulto</a></li>
                    <li><a href="javascript:BuscarProdutos('masc plus size')">Plus Size</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="pasta-mulher"><i class='bx bx-female-sign'></i> Feminino
                    <span class='bx bxs-down-arrow seta-mulher'></span>
                </a>
                pasta feminina
                <ul class="moda-mulher">
                    <li><a href="javascript:BuscarProdutos('fem infantil')">Infantil</a></li>
                    <li><a href="javascript:BuscarProdutos('fem jovem')">Jovem</a></li>
                    <li><a href="javascript:BuscarProdutos('fem adulto')">Adulto</a></li>
                    <li><a href="javascript:BuscarProdutos('fem plus size')">Plus Size</a></li>
                </ul>
            </li>-->

            <li><a href="#" data-bs-toggle="modal" data-bs-target="#contaModal"><i class='bx bxs-user'></i> Conta</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#carrinhoModal"><i class='bx bxs-cart'></i> Carrinho</a></li>
        </ul>
        
    </nav>
    <!--FIM da sidebar-->

    <!--INÍCIO da vitrine-->

    <!--filtros de busca ROUPAS
    parte cancelada

--><div style="text-align: center;" id="categorias">

   <h1>PRODUTOS</h1>
      <!--<p id="modaclicada" style ="display: non;"></p>

      <div style="background-color: white;" class="btn-group btn-group-lg" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio_roupa" id="btnradio_camisas" autocomplete="off" checked>
        <label class="btn btn-outline-dark" for="btnradio_camisas">CAMISAS</label>

        <input type="radio" class="btn-check" name="btnradio_roupa" id="btnradio_blusas" autocomplete="off">
        <label class="btn btn-outline-dark" for="btnradio_blusas">BLUSAS</label>

        <input type="radio" class="btn-check" name="btnradio_roupa" id="btnradio_calcas" autocomplete="off">
        <label class="btn btn-outline-dark" for="btnradio_calcas">CALÇAS</label>

        <input type="radio" class="btn-check" name="btnradio_roupa" id="btnradio_shorts" autocomplete="off">
        <label class="btn btn-outline-dark" for="btnradio_shorts">SHORTS</label>
      </div>

    </div>

    <div class="container mt-5">
      
      <div class="row justify-content-end">

        <div class="col-md-3 text-center">
          <h4>Filtro</h4>
          <select class="form-select" aria-label="Default select example">
            <option value="1" selected>Menor Preço</option>
            <option value="2">Maior Preço</option>
          </select>
        </div>

        <div class="col-md-3 text-center">
          <h4>Marcas</h4>
          <select class="form-select" aria-label="Default select example">
            <option selected>Todas</option>
            <option value="1">Levi´s</option>
            <option value="2">Lacoste</option>
            <option value="3">Polo Wear</option>
          </select>
        </div>

        <div class="col-md-3 text-center">
          <h4>Tamanhos</h4>
          <select class="form-select" aria-label="Default select example">
            <option selected>Todos</option>
            <option value="1">P</option>
            <option value="2">M</option>
            <option value="3">G</option>
          </select>
        </div>
        
      </div>

      <div class="row justify-content-end">
        <div class="col-md-9 text-center">
          <br>
          <button type="button" class="btn btn-dark btn-lg">Buscar</button>
        </div>
      </div>

    </div>
           -->
  <!--Layout dos produtos-->


  <div class="AreaProdutos">
    

  <div id="produtos" class="row row-cols-1 row-cols-md-3 g-6">

  <?php  
    $sql = "SELECT * FROM produto;";
    $result = mysqli_query($conexao, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
      while ($row = mysqli_fetch_assoc($result)){
        ?>
        
        <div class="col">
      <div class="card">
        <img src="<?php echo $row['imagem'] ?>" class="img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title">R$ <?php echo $row['preco'] ?></h5>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $row['produtonome'] ?></li>
          <li class="list-group-item"> <?php echo $row['produtotamanho'] ?></li>
          <li class="list-group-item">
          <div class="quantity">
            <input type="text" id="quantity" value="1">
          </div>
          </li>
          <li class="list-group-item">
            <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Adicionar ao carrinho"/>
          </li>
        </ul>
      </div>
    </div>
    <?php
      }
    }
  ?>
    
  </div>

  </div>

  <!--FIM layout de produtos-->
      
  <!-- Modal Conta -->
  <div class="modal fade" id="contaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MINHA CONTA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <!--Tabela com os dados do cliente-->
          <table class="table table-primary">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço de Entrega</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php if(isset($_SESSION['email'])): ?>
                <th><?php echo $_SESSION['nome']; ?></th>
                <td><?php echo $_SESSION['email']; ?></td>
                <td><?php echo $_SESSION['endereco']; endif;?></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="modal-footer">
          <a href="../LOGIN/desconectar.php"><button type="button" class="btn btn-danger">Desconectar Conta</button></a>
          <a href="../LOGIN/trocar.php"><button type="button" class="btn btn-primary">Entrar/Trocar Conta</button></a>
        </div>

      </div>
    </div>
  </div>


  <!--PARTE CANCELADA Modal Produto 
  <div class="modal fade" id="produtoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">PRODUTO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          FOTO DO PRODUTO
          <img src="../PLACEHOLDER/camisa azul.jpg" class="rounded mx-auto d-block" alt="...">
          <br>

          TABELA DADOS DO PRODUTO
    <table class="table table-warning table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Cor</th>
          <th scope="col">Categoria</th>
          <th scope="col">Tamanho</th>
          <th scope="col">Marca</th>
          <th scope="col">Estoque</th>
          <th scope="col">Preço</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">camisa</th>
          <td>Amarelo</td>
          <td>Roupa Masc. Adulto</td>
          <td>P</td>
          <td>Lacoste</td>
          parte cancelada<td>12</td>
          <td>R$ 95,00</td>
        </tr>
        
      </tbody>
    </table>
        </div>

        <div class="modal-footer">
          <div class="quantity">
            <button class="btn minus-btn disabled" type="button">-</button>
            <input type="text" id="quantity" value="1">
            <button class="btn plus-btn" type="button">+</button>
          </div>
<p>TOTAL R$ </p>
          <button type="button" class="btn btn-primary">+ Adicionar ao Carrinho</button>
        </div>

      </div>
    </div>
  </div> -->





  <!-- Modal Carrinho -->
  <div class="modal fade" id="carrinhoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MEU CARRINHO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <!--TABELA PARA O CARRINHO-->
    <table class="table table-warning table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Cor</th>
          <th scope="col">Categoria</th>
          <th scope="col">Tamanho</th>
          <th scope="col">Marca</th>
          <th scope="col">Quant.</th>
          <th scope="col">Preço</th>
          <th scope="col">Opções</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">camisa</th>
          <td>Amarelo</td>
          <td>Roupa Masc. Adulto</td>
          <td>P</td>
          <td>Lacoste</td>
          <td>3</td>
          <td>R$ 285,00</td>
          <td><button type="button" class="btn btn-danger">Remover</button></td>
        </tr>
        <tr>
          <th scope="row">moletom</th>
          <td>Azul</td>
          <td>Roupa Femi. Plus Size</td>
          <td>GGG</td>
          <td>Levi's</td>
          <td>1</td>
          <td>R$ 35,00</td>
          <td><button type="button" class="btn btn-danger">Remover</button></td>
        </tr>
        <tr>
          <th scope="row">jeans</th>
          <td>marrom</td>
          <td>Roupa Masc.  Infantil</td>
          <td>M</td>
          <td>Calvin Klein</td>
          <td>1</td>
          <td>R$ 150,00</td>
          <td><button type="button" class="btn btn-danger">Remover</button></td>
        </tr>
      </tbody>
    </table>
        </div>

        <div class="modal-footer">
          <p>TOTAL: R$470,00</p>
          <!-- Example single danger button -->
          <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class='bx bx-dollar'></i> Pagar
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><i class='bx bx-credit-card'></i> Cartão de Crédito</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class='bx bx-credit-card-alt' ></i> Cartão de Débito</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>


    <!-- Script para botão de incremento -->

    <script>
      //parte cancelada
      /*function BuscarProdutos(tabela){
        document.getElementById("produtos").innerHTML= "";
        document.getElementById("modaclicada").innerHTML= tabela;
        return;
      }
      // função para resetar valor para 1
      function Resetar(){
        document.getElementById("quantity").value = "1";
        return;
      }
      //botao de incremento 
        //setting default attribute to disabled of minus button
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        //taking value to increment decrement input value
        var valueCount
        //estoque
        var estoque

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function()
        {
            //getting value of input
            valueCount = document.getElementById("quantity").value;
            // definindo um estoque
            estoque = 13

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount > 1){
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }
            // fazer condição if que impede que o contador ultrapasse o valor disponível no estoque
            if (valueCount == estoque){
                document.querySelector(".plus-btn").setAttribute("disabled", "disabled")
            }
        })

        //minus button
        document.querySelector(".minus-btn").addEventListener("click", function()
        {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value decrement by 1
            valueCount--;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1){
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }
            // condição que libera button plus quando é possível adcionar estoque
            if (valueCount < estoque){
                document.querySelector(".plus-btn").removeAttribute("disabled");
                document.querySelector(".plus-btn").classList.remove("disabled")
            }
        })*/

    </script>

    <!-- Caminho para arquivo JavaScript -->
    <script src="comando.js"></script>

    <!-- LINK Option 1: Bootstrap Bundle with Popper--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>