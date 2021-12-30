<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto2</title>
</head>
<body>

    <main>

        <h1>"Lista de alumnos"</h1>

    </main>

   

    <section>
    
        <form action="alumnos.php" method="post">
        <p>
            Nombre: <input type="text" name="nombre">
        </p>

        <p>Contenidos a reforzar:<br>

            <input type="radio" name="contenidosReforzar" value="htmlCss"> HTML y CSS<br>

            <input type="radio" name="contenidosReforzar"value="javascript"> Javascript<br>

            <input type="radio" name="contenidosReforzar"value="php"> PHP
        </p>

        <p> Tipo de ejercicios<br>
        <select name="transporte">

            <option>Ejercicio práctico</option>

            <option>Proyecto</option>

            <option>Clase guiada</option>

        </select>
        </p>
        <p><input type="submit" value="Enviar"></p>
      </form>

    </section>

</body>

<footer></footer>

</html>