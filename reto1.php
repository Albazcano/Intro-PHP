<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
</head>
<body>
    <a href="index.php">Atrás</a>
    
    <main>

        <h1>"Lista de la compra"</h1>

    </main>

    <section>
        <?php    
        $products= ['patatas', 'aceite', 'huevos', 'sal']; 
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