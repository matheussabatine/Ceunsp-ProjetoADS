<?php 
session_start();
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
        <img src="../PLACEHOLDER/<?php echo $row['imagem'] ?>" class="img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title">R$ <?php echo $row['preco'] ?></h5>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $row['produtonome'] ?></li>
          <li class="list-group-item"><?php echo $row['produtotamanho'] ?></li>
          <li class="list-group-item">
          <div class="quantity">
            <!--<button class="btn minus-btn disabled" type="button">-</button>-->
            <input name="contador" type="text" id="quantity<?php echo $row['id'] ?>" value='1'>
            <!--<button class="btn plus-btn" type="button">+</button>-->
          </div>
          </li>
          <li class="list-group-item">
            <input type="hidden" id="name<?php echo $row['id'] ?>" value='<?php echo $row['produtonome'] ?>'>
            <input type="hidden" id="size<?php echo $row['id'] ?>" value='<?php echo $row['produtotamanho'] ?>'>
            <input type="hidden" id="price<?php echo $row['id'] ?>" value='<?php echo $row['preco'] ?>'>
            <button onclick="Alertar()" class="ADD btn btn-success" data-id="<?php echo $row['id'] ?>">Adcionar ao Carrinho</button>
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
            <tbody id='tabela_conta'>
                <?php if(isset($_SESSION['email'])){
              echo "<tr id='conta_conectada'>
                <th>".$_SESSION['nome']."</th>
                <td>".$_SESSION['email']."</td>
                <td>".$_SESSION['endereco']."</td>
              </tr>";
                }
              ?>
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

  <!-- Modal Carrinho -->
  <div class="modal fade" id="carrinhoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MEU CARRINHO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!--TABELA CARRINHO-->
        <div id="displayCheckout" class="modal-body">

        <?php

        if(!empty($_SESSION['cart'])){
          $outputTable = '';
          $total = 0;
          $outputTable .="<table id='carrinho' class='table table-warning table-striped table-bordered'>
          <thead>
            <tr>
              <th scope='col'>Nome</th>
              <th scope='col'>Tamanho</th>
              <th scope='col'>Preço</th>
              <th scope='col'>Quantidade</th>
              <th scope='col'>Opções</th>
            </tr>
          </thead>";
          foreach($_SESSION['cart'] as $key => $value){
              $outputTable .= "<tr>
              <td>".$value['p_name']."</td>
              <td>".$value['p_size']."</td>
              <td>R$ ".($value['p_price'] * $value['p_quantity'])."</td>
              <td>".$value['p_quantity']."</td>
              <td><button id=".$value['p_id']." type='button' class='btn btn-danger delete'>Remover</button></td>
            </tr>";
            $total = $total + ($value['p_price'] * $value['p_quantity']);
          }
          $outputTable .= "</table>";
          $outputTable .= "<div class='text-center'><b>Total: R$ ".$total."</b></div>";
          echo $outputTable;
        }
        ?>
    
        </div>

        <div class="modal-footer">
  
          <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class='bx bx-dollar'></i> Pagar
            </button>
            <ul class="dropdown-menu">
              <li><button onclick="Pagar()"><a class="dropdown-item"><i class='bx bx-credit-card'></i> Cartão de Crédito</a></button></li>
              <li><hr class="dropdown-divider"></li>
              <li><button onclick="Pagar()"><a class="dropdown-item"><i class='bx bx-credit-card-alt' ></i> Cartão de Débito</a></button></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>

    <script>
      function Pagar(){
        const pai_carrinho = document.getElementById("displayCheckout");
        const filho_carrinho = pai_carrinho.querySelector("#carrinho");

        const pai_conta = document.getElementById("tabela_conta");
        const filho_conta = pai_conta.querySelector("#conta_conectada");

        if (filho_carrinho == null) {
          alert("Não há produtos no carrinho");
        } else {
          //alert("há registros");
          if(filho_conta == null){
            //não há conta conectada, então leva para tela de login
            window.location.replace('../LOGIN/index.php');
          } else {
            //alert("validação completa");
            window.location.replace('checkout.php');

          }
        }
      }
      function Alertar(){
        alert("Adicionado ao Carrinho !");
      }



      $(document).ready(function(){
        alldeleteBtn = document.querySelectorAll('.delete')
        alldeleteBtn.forEach(onebyone => {
          onebyone.addEventListener('click',deleteINsession)
        })

        function deleteINsession(){
            removable_id = this.id;
            $.ajax({
              url: 'cart.php',
              method: 'POST',
              dataType: 'json',
              data:{
                    id_to_remove:removable_id,
                    action : 'remove'
              }, 
              success:function(data){
                      $('#displayCheckout').html(data);
                      alldeleteBtn = document.querySelectorAll('.delete')
                      alldeleteBtn.forEach(onebyone => {
                      onebyone.addEventListener('click',deleteINsession)
        })
                    }
            }).fail( function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            });
        }


        $('.ADD').click(function(){
          id = $(this).data('id');
          name = $('#name' + id).val()
          size = $('#size' + id).val()
          price = $('#price' + id).val()
          quantity = $('#quantity' + id).val()  
            $.ajax({
              url: 'cart.php',
              method: 'POST',
              dataType: 'json',
              data:{
                    cart_id : id,
                    cart_name : name,
                    cart_size : size,
                    cart_price : price,
                    cart_quantity : quantity,
                    action : 'add',
              }, 
              success:function(data){
                      $('#displayCheckout').html(data)
                      alldeleteBtn = document.querySelectorAll('.delete')
                      alldeleteBtn.forEach(onebyone => {
                      onebyone.addEventListener('click',deleteINsession)
        })
                    }
            }).fail( function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            });


          console.log("name: "+name)
          console.log("size: "+size)
          console.log("price: "+price)
          console.log("quantity: "+quantity)
        })
      })







     /*
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
            valueCount = document.getElementByName("quantity").value;
            // definindo um estoque
            estoque = 13

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementByName("quantity").value = valueCount

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
            valueCount = document.getElementByName("quantity").value;

            //input value decrement by 1
            valueCount--;

            //setting increment input value
            document.getElementByName("quantity").value = valueCount

            if (valueCount == 1){
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }
            // condição que libera button plus quando é possível adcionar estoque
            if (valueCount < estoque){
                document.querySelector(".plus-btn").removeAttribute("disabled");
                document.querySelector(".plus-btn").classList.remove("disabled")
            }
        })
        */

    </script>

    <!-- Caminho para arquivo JavaScript -->
    <script src="comando.js"></script>

    <!-- LINK Option 1: Bootstrap Bundle with Popper--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>

<?php
mysqli_close($conexao);
?>