<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso JS - Operadores lógicos o booleanos</title>
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
            <h2><b>CURSO JS - OPERADORES LÓGICOS O BOOLEANOS</b></h2>
            <div class="navegacion2">
                <div class="botones">
                    <h3 class="text-black">OPERADORES LÓGICOS</h3>
                </div>
            </div>
            <div class="contenido-cursos">
                <p>
                    Los operadores lógicos , también conocidos como operadores booleanos , evalúan la expresión y
                    devuelven verdadero o falso. <br>
                    La siguiente tabla explica los operadores lógicos <strong>( AND, OR, NOT )</strong>.
                </p>
                <img src="../../../../../IMG/tabla_operadores_logicos.png">
                <p class="mensaje">Puede comprobar todo tipo de datos; los operadores de comparación siempre devuelven
                    verdadero o falso.</p>
                <p>
                    En el siguiente ejemplo, hemos conectado dos expresiones booleanas con el operador
                    <strong>AND</strong>.
                </p>
                <img src="../../../../../IMG/and.png">
                <p>
                    Para que esta expresión sea verdadera , ambas condiciones deben ser verdaderas. <br>
                    - La primera condición determina si 4 es mayor que 2, lo cual es cierto. <br>
                    - La segunda condición determina si 10 es menor que 15, lo cual también es cierto. <br>
                    Con base en estos resultados, se encuentra que toda la expresión es verdadera.
                </p>
                <h3><strong>Operador condicional (Ternary)</strong></h3>
                <p>Otro operador condicional de JavaScript asigna un valor a una variable, según alguna condición.</p>
                <strong>Sintaxis:</strong><br>
                <img src="../../../../../IMG/sintaxis_ternary.png" alt=""><br>
                <strong>Por ejemplo:</strong><br>
                <img src="../../../../../IMG/ejemplo_ternary.png" alt=""><br>
                <p>
                    Si la variable edad es un valor por debajo de 18, el valor de la variable adulto será "Demasiado
                    joven". De lo contrario, el valor adulto será "Lo suficientemente mayor".
                </p>
                <p class="mensaje">Los operadores lógicos le permiten conectar tantas expresiones como desee.</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>