<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso JS - El bucle for</title>
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
                        <a class="btn btn-dark fs-6" href="../../../../login.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <div class="contenedor">
            <h2><b>CURSO JS - EL BUCLE FOR</b></h2>
            <div class="navegacion2">
                <div class="botones">
                    <a href="curso-bucle_for.php"><button>◄</button></a>
                    <h3>EL BUCLE FOR</h3>
                </div>
            </div>
            <div class="contenido-cursos">
                <p>
                    El siguiente ejemplo crea un bucle for que imprime los números del 1 al 5.
                </p>
                <img src="../../../../../IMG/for.png">
                <p>
                    En este ejemplo, la declaración 1 establece una variable antes de que comience el ciclo ( var i =
                    1). <br>
                    La declaración 2 define la condición para que se ejecute el ciclo (i debe ser menor o igual que 5).
                    <br>
                    La declaración 3 aumenta un valor (i ++) cada vez que se ejecuta el bloque de código en el bucle.
                </p>
                <strong>Resultado:</strong><br>
                <img src="../../../../../IMG/resultado_for.png" alt="">
                <p>
                    La declaración 1 es opcional y se puede omitir si sus valores se establecen antes de que comience el
                    ciclo.
                </p>
                <img src="../../../../../IMG/alternativa_for.png" alt="">
                <p>
                    Además, puede iniciar más de un valor en la declaración 1 , utilizando comas para separarlos.
                </p>
                <img src="../../../../../IMG/alternativa_for2.png" alt="">
                <p>
                    Si la declaración 2 devuelve verdadero, el ciclo comenzará de nuevo, si devuelve falso, el ciclo
                    terminará.
                    La declaración 2 también es opcional.
                </p>
                <p class="mensaje">Si omite la declaración 2, debe proporcionar un break dentro del ciclo. De lo
                    contrario, el ciclo nunca terminará.
                </p>
                <p>La declaración 3 se usa para cambiar la variable inicial . Puede hacer cualquier cosa, incluido
                    incremento negativo (i--), incremento positivo (i = i + 15) o cualquier otra cosa. <br>
                    La declaración 3 también es opcional y se puede omitir si incrementa sus valores dentro del ciclo.
                </p>
                <img src="../../../../../IMG/for_alternativa3.png">
                <p class="mensaje">
                    Puede tener varios bucles for anidados.
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>