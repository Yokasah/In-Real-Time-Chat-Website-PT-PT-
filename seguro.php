<?php
session_start();
require_once('bd.php');

    if(!isset($_SESSION['id_user'])){
      header("location: index.php");
    }
    else

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Chatuga</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        
  </head>
  <body>
  <div class="container">
   <br />
   <h3 align="center">Chatuga- Aplicação de mensagens</a></h3><br/>
    <p align="right">Olá <?php echo($_SESSION['nomeuser']);?>  -  <a href="logout.php">Logout</a></p>

    <table class="table" style="width: 1000px;">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Username</th>
          <th scope="col">Estado</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>Ola</td>
        <td>Adeus</td>
        <td><a href="" class="badge badge-primary" style="font-size: 14px;">Começar chat</a></td>
      </tr>
    </tbody> 

    <!-- <div id="tabela"></div> -->
  </div>  


<script>
 $(document).ready(function() {

    setInterval(function(){
    atualizarTabela();
   }, 1000);

  function atualizarTabela(){
    $.get("verificar_dados.php", function(data, status){
      // $("#tabela").html(data);
      
      })
  }

 }); 
</script>

<!-- <button>Teste</button> -->

<p id="teste"></p>

</div>


    
  </div>
</div>      
  </body>
</html>