<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">    <!--Font Awesome 5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Login GoModa</title>
    <div class="container-fluid bg-info">
        <div class="container">
            <h3 class="text-center font-italic">Ingreso</h3>
        </div>
      </div>
    
</head>
<body>
<form action="../Estructura/Validar.php" method="POST">
    <div class="container">
        <div class="row" >
          <div class="col-6">
           <a href="index.php"><img src="../Imagenes/Logo.png" alt="Erro 404 not Found" width=350px height=350px></a> 
          </div>
          <div class="col-6">
            <form action="menu.php"  method="POST">
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">  <img src="../Imagenes/usuario.png" width="23px" height="23px"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Usuario" name="username" required>
              </div>
                    <br>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">  <img src="../Imagenes/password.png" width="23px" height="23px"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Contraseña" name="Contraseña" required>
              </div>
              <br>
              <button href="Validar.php" class="btn btn-secondary btn-lg active" data_but="btn-xs"><i class="fa fa-check-circle-o"></i>Ingresar</button>
            </form>
          </div>
        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>