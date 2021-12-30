<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2</title>
</head>

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