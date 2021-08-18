<!-- //teste ola e adeus  ola ola-->
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php
  require_once('bd.php');

  if(isset($_POST['registrar'])){

    if($_POST['nome'] == "" && $_POST['email'] == "" && $_POST['password'] == ""){            
        echo("Tem que preencher todos os campos");
   }
   else{
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $tipo = "user";

        $sql="INSERT INTO utilizador(nome, email, password, tipo, estado) VALUES ('$nome', '$email', '$password', '$tipo', '0')";
        $result = $conn->query($sql);      

        header("location: index.php");
   }
}
  
  ?>
  <form action="" method="POST">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br>
                        <h3 class="text-center text-info">Registrar</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Nome:</label><br>
                            <input type="text" name="nome" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="registrar" class="btn btn-info btn-md" value="submit">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>