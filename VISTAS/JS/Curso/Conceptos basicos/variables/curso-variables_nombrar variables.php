<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso JS - Variables_Nombrar variables</title>
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
            <h2><b>CURSO JS - VARIABLES</b></h2>
            <div class="navegacion2">
                <div class="botones">
                    <a href="curso-variables_usando variables.php"><button>◄</button></a>
                    <h3 class="text-black"><b>NOMBRAR VARIABLES</b></h3>
                </div>
            </div>
            <div class="contenido-cursos">
                <p>
                    Los nombres de las variables de JavaScript distinguen entre mayúsculas y minúsculas.
                    En el siguiente ejemplo, cambiamos x a mayúsculas:
                </p>
                <img src="../../../../../IMG/cambio_variable.png" alt=""><br>
                <p>
                    Este código no dará como resultado ninguna salida, ya que x y X son dos variables diferentes. <br>

                    <strong>Reglas de nomenclatura:</strong><br>
                    - El primer carácter debe ser una letra, un guión bajo (_) o un signo de dólar ($). Los caracteres
                    siguientes pueden ser letras, dígitos, guiones bajos o signos de dólar.
                    - No se permiten números como primer carácter.
                    - Los nombres de las variables no pueden incluir un operador matemático o lógico en el nombre. Por
                    ejemplo, 2 * algo o esto + aquello;
                    - Los nombres de JavaScript no deben contener espacios.
                </p>
                <p class="mensaje">Los guiones no están permitidos en JavaScript. Está reservado para restas.</p>
                <p>
                    Hay algunas otras reglas a seguir al nombrar sus variables de JavaScript: <br>
                    - No debe usar ningún símbolo especial , como my # num, num% , etc. <br>
                    - Asegúrese de no usar ninguna de las siguientes palabras reservadas de JavaScript.
                </p>
                <img src="../../../../../IMG/nombres_de_variables.png" alt=""><br>
                <p class="mensaje">Cuando se familiarice con JavaScript, recordar estas palabras clave será mucho más
                    fácil.</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>