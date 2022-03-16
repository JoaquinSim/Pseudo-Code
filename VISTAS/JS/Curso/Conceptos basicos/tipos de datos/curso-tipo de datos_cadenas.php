<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso JS - Tipos de datos_Cadenas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../../CSS/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <h1><b class="text-white">Pseudo Code</b></h1>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="../../../../../IMG/logo.png">
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-4 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page"
                            href="../../js-curso-modulos.php"><b>Modulos</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page" href="../../../../cursos.php"><b>Cursos</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page" href="../../../../talleres.php"><b>Talleres</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="btn btn-dark fs-6" href="../../../../../login.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <div class="contenedor">
            <h2><b>CURSO JS - TIPOS DE DATOS</b></h2>
            <div class="navegacion2">
                <div class="botones"><a href="curso-tipo de datos_numeros con decimales.php"><button>◄</button></a>
                    <h3 class="text-black">CADENAS</h3><a href="curso-tipo de datos_datos booleanos.php"><button>►</button></a>
                </div>
            </div>
            <div class="contenido-cursos">
                <p>
                    Las cadenas o strings de JavaScript se utilizan para almacenar y manipular texto.
                    Una cadena puede ser cualquier texto que aparezca entre comillas . Puede utilizar comillas simples o
                    dobles.
                </p>
                <img src="../../../../../IMG/strings1.png"><br>
                <p>Puede usar comillas dentro de una cadena , siempre que no coincidan con las comillas que rodean la
                    cadena.</p>
                <img src="../../../../../IMG/strings2.png" alt="">
                <p class="mensaje">Puede obtener comillas dobles dentro de comillas dobles utilizando el carácter de
                    escape como este: \ "o \ 'dentro de comillas simples.</p>
                <p>
                    Como las cadenas deben escribirse entre comillas, deben manejarse las comillas dentro de la cadena .
                    El carácter de escape de barra invertida () convierte los caracteres especiales en caracteres de
                    cadena.
                </p>
                <img src="../../../../../IMG/variable_saludar.png"><br>
                <strong>Resultado:</strong><br>
                <img src="../../../../../IMG/mostrar_variable_saludar.png" alt="">
                <p>El carácter de escape () también se puede utilizar para insertar otros caracteres especiales en una
                    cadena.
                    Estos caracteres especiales se pueden agregar a una cadena de texto usando el signo de barra
                    invertida.</p>
                <img src="../../../../../IMG/caracteres_de _escape.png" alt="">
                <p class="mensaje">Si comienza una cadena con una comilla simple, también debe terminarla con una
                    comilla simple. La misma regla se aplica a las comillas dobles. De lo contrario, JavaScript se
                    confundirá.</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>