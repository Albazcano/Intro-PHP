<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
</head>

<style>
    h1 {
        text-align: center;
    }

    body {
        width: 80%;
        margin: 0 auto;
        font-size: 1.25rem;
    }
</style>

<body>
    <a href="index.php">Atrás</a>
    
    <main>

        <h1>"Lista de la compra"</h1>

    </main>

    <section>
        <?php    
        $products= ['Patatas', 'Aceite', 'Huevos', 'Sal']; 
        $shoppingList="<ul>". PHP_EOL;

        foreach ($products as &$valor) {
            $shoppingList.="<li>$valor</li>" . PHP_EOL;
        }  
        $shoppingList.="</ul>";

        echo $shoppingList;

        ?>
    </section>

</body>

<footer></footer>

</html>