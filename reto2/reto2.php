<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto2</title>
</head>

<body>
<a href="index.php">Atrás</a>

    <h1>"Lista de alumnos"</h1>
   
    <form action="alumnos.php" method="POST">
    <p>
        Nombre: <input type="text" name="nombre">
    </p>

    <p>Contenidos a reforzar:<br>

        <input type="radio" name="contenidos" value="htmlCss"> HTML y CSS<br>

        <input type="radio" name="contenidosReforzar"value="javascript"> Javascript<br>

        <input type="radio" name="contenidosReforzar"value="php"> PHP
    </p>

    <p> Tipo de ejercicios<br>
    <select name="ejercicios">

        <option>Ejercicio práctico</option>

        <option>Proyecto</option>

        <option>Clase guiada</option>

    </select>
    </p>
    <p><input type="submit" value="Enviar"></p>
    </form>

    <?php   
    
    $nombre = $_POST['nombre'];
    $contenidosReforzar = $_POST['contenidos'];
    $ejercicios = $_POST['ejercicios'];

    ?>

</body>

<footer></footer>

</html>