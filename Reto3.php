<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 3</title>

</head>

<style>

h1 {
    text-align: center;
}

body {
    width: 80%;
    margin: 0 auto;
}

table {
    width: 50%;
    margin: 3.12rem;
    border: 1px solid black;
}

th {
    
    background-color: lightgrey;
    text-align: center;
    padding: 0.31rem;
    border: 1px solid black;
}

td  {
    text-align: center;
    padding: 0.31rem;
    border: 1px solid black;
}


</style>

<body>
    <a href="index.php">Atrás</a>
    <h1>Usuarios Biblioteca</h1>
    
    <?php
        $userInfo = [
            "Nombre" => "Alba",
            "Edad" => "37",
            "Ciudad" => "Gijón",
            "Teléfono" => "666.666.666",
            "Email" => "alba@gmail.com"
        ];
        
        $tableHTML = "<table>" . PHP_EOL . "<thead>" . "<tr>";

        foreach ($userInfo as $clave=>$valor)
   		{
            $tableHTML.="<th>$clave</th>";
            
        } $tableHTML.="</tr>" . "</thead>" ;
        foreach ($userInfo as $clave=>$valor)
   		{
               $tableHTML.="<td>$valor</td>" . PHP_EOL;
        }    
       
           $tableHTML.="</tr>" . "</table>";

        echo $tableHTML;
	
      
    ?>



</body>
</html>