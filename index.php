<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavny napis</h1>
    <?php
    echo "sposob 1 ";
    echo 'sposob 2 ';
    echo ("sposob 3 ");
    echo '<h2>napis2</h2>';
    $x = 10;
    $y = 20;
    echo $x + $y;
    echo "<br>";
    $meno = "Janko";
    echo $meno;
    echo "<br>";
    var_dump($meno);
    $farby = array("cervena", "modra", "zelena");
    echo $farby[0];
    echo "<br>";
    foreach($farby as $farba){
        echo "Farba : " . $farba . "<br>";
        
    }
    $data = array ("Peter" => 25 , "Jana" => 30 , "Marek" => 35);
    foreach($data as  $name => $age){
        echo "Meno : " . $name . " Vek : " . $age . "<br>";
    }
    // komentar
    // new comment
    
    
    
    ?>
</body>
</html>