<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoModa</title>
    <!--Css-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!--Boostrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">    <!--Font Awesome 5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid header">
        <a href="index.php" class="navbar-brand"><img id="logo" src="../Imagenes/logo.png" alt="Error 404, file not found" width=3.4% height=3.4%></a>  
        <button class="btn-navbar" id="btn-hombre">Hombre</button>
        <button class="btn-navbar" id="btn-mujer">Mujer</button>
        <button class="btn-navbar" id="btn-niño">Niño</button>
        <button class="btn-navbar" id="btn-niña">Niña</button>
        <button class="btn-navbar"id="btn-bebe">Bebes</button>
        <a href="login.php"><button id="btn-ingresar">Ingresar</button></a>
        <button id="btn-buscar"><i class="fas fa-search"></i>          Buscar</button>
    </div>
    <div class="row" id="album">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                   <img
                   src="../Imagenes/CATALOGOHOMBRES.png"
                   class="w-100 shadow-1-strong rounded mb-4" 
                   alt=""
                   />
                   <img
                   src="../Imagenes/Mujer.jpeg"
                   class="w-100 shadow-1-strong rounded mb-4" 
                   alt=""
                   />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                src="../Imagenes/Niña.jpg"
                class="w-100 shadow-1-strong rounded mb-4" 
                alt=""
                />

                <img
                src="../Imagenes/Bebe.jpeg"
                class="w-100 shadow-1-strong rounded mb-4" 
                alt=""
                />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                src="../Imagenes/Niño.jpg"
                class="w-100 shadow-1-strong rounded mb-4" 
                alt=""
                />

                <img
                src="../Imagenes/busos.png"
                class="w-100 shadow-1-strong rounded mb-4" 
                alt=""
                />
            </div>
        </div>
    

    <div class="container-fluid" id="BarraInf">

        <div class="container-fluid footer">
        <div class="row" >
            <div class="col-3">
                
            </div>
            <div class="col-3 ">
                <a href="https://www.facebook.com/Tiendas-GoModa-102602142009451" target="_blank"><img alt="Siguenos en Facebook" src="https://img.icons8.com/ios/452/facebook--v1.png" width="28" height="28"  /></a>
                <a rel="author" href="https://instagram.com/tiendas_gomoda?igshid=j0jtuz8pkqdc" target="_blank"><img alt="Siguenos en Instagram" src="https://image.flaticon.com/icons/png/512/87/87390.png" width="28" height="28"  /></a>
                <a href="" target="_blank"><img src="https://img.icons8.com/ios/452/whatsapp--v1.png" alt="" width="28" height="28" /></a>
                <strong><p>Cel: 3112567892</p></strong>
            </div>
            <div class="col-3 contacto">
                <p class="lineas"></p>
                <a href="" class="infor"><p>Contacto</p></a> 
                <a href="" class="infor"><p>Envios</p></a>
                <a href="" class="infor"><p>Garantia</p></a>
            </div>
            <div class="col-3">
                <br>
                <a href="" class="terminos">Terminos y condiciones</a>
            </div>
        </div>
    </div>

    </div>

    <input type="checkbox" id="btn-nav" class="checkbox">
    <header id="ca"> 
        <nav class="usuario" id="us">
            <p class="correo">Ingrese su correo</p>
            <input type="text">
            <p class="contraseña">Ingrese su contraseña</p>
            <input type="password">
        </nav>
    </header> 



<!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>