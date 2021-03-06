<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2</title>
</head>

<style>

    body {
        width: 80%;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
    }


    form {
        width: 50%;
        margin: 2.7rem auto;
        font-size: 1.25rem;
    }

    .identificacion {
        font-weight: bold;
        margin-bottom: 0.62rem;
    }

    .materias {
        font-weight: bold;
        margin-top: 0.62rem;
        margin-bottom: 0.62rem;
    }

    .actividades {
        font-weight: bold;
        margin-top: 0.62rem;
    }

    #submit {
        display: block;
        width: 9.37rem;
        margin: 1.25rem auto;
        padding: 1em;
        font-size: 1.12rem;
        font-weight: bold;
    }
        
</style>

<body>
    <a href="index.php">Atrás</a>

    <h1>"Lista de alumnos"</h1>
   
    <form action="" method="POST">
    <div class = "identificacion" >
        Nombre: <input type="text" name="nombre">
    </div>

    <div class = "materias">Contenidos a reforzar:<br>

        <input type="radio" name="contenidos" value="htmlCss"> HTML y CSS<br>

        <input type="radio" name="contenidos"value="javascript"> Javascript<br>

        <input type="radio" name="contenidos"value="php"> PHP
    </div>

    <div class = "actividades"> Tipo de ejercicios<br>
    <select name="ejercicios">

        <option>Ejercicio práctico</option>

        <option>Proyecto</option>

        <option>Clase guiada</option>

    </select>
    </div>
    
    <button class="btn btn-primary" type="submit" id="submit" name="submit">Enviar</button>
    </form>

    <div id="formulario">

        <?php   
       
        if (isset($_POST['submit'])) {
            echo "<h1>Formulario</h1>";
            $nombre = $_POST["nombre"];
            $contenidos = $_POST["contenidos"];
            $ejercicios = $_POST["ejercicios"];
            echo "Nombre: " . $nombre . "</br>";
            echo "Materias a reforzar: " . $contenidos . "</br>";
            echo "Actividades: " . $ejercicios. "</br>";

        }
        ?>
    </div>

</body>

<footer></footer>

</html>