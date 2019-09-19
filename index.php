<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    <li><a href="Table.php?num=1">Table de 1</a></li>
    <li><a href="Table.php?num=2">Table de 2</a></li>
    <li><a href="Table.php?num=3">Table de 3</a></li>
    <li><a href="Table.php?num=4">Table de 4</a></li>
    <?php
    for ($i=5; $i <=10 ; $i++) { 
        ?> <li><a href="Table.php?num=<?php echo$i?>">Table de <?php echo $i?> </a></li>
        <?php
    }
    ?>
    </ul>    
</body>
</html>