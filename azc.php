<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
if(isset($_GET['Knop'],$_GET['num1'],$_GET['num2'],$_GET['num3']) && !empty($_GET['num1']) && !empty($_GET['num2']) && !empty($_GET['num3'])){
    $operator=$_GET['Knop'];
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $num3=$_GET['num3'];
    $result=0;
    switch ($operator){
        case "=":
            $result='Біткоін='.gyd($num1,$num2,$num3).'<br>';
            break;
    }
    echo $result;
}
else{
    echo "Ндостатньо данних для розрахунків <br>";
}

function gyd($a,$b,$c){
    $s=($a*$b)/$c;
    return $s;
}

?>
<a href="index.html">Назад до калькулятора</a>
</body>
</html>
