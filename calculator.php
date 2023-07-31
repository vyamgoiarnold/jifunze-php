<?php
  if(isset($_GET['calc'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    $op = $_GET['op'];
    if($op == "+"){
        $ans = $x + $y;
        }elseif($op == "-"){
            $ans = $x - $y;
        }elseif($op == "x"){
            $ans = $x * $y;
        }elseif($op == "/"){
            if($y != 0){
                $ans = $x/$y;
            }else{
                "UNDIFINED!";
            }
        }elseif($op == "rem"){
            $ans = $x%$y;
        }else {
            "PLEASE SELECT OPERATION";
        }
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>CALCULATOR</title>
    </head>
    <body>
    <form method="GET">
        <input type="number" name="x" required placeholder="x"><br>
            <input type="number" name ="y" required placeholder="y"><br>
                <select name="op"><br>
                    <option>---SELECT OPERATION---</option>
                    <option>+</option>
                    <option>-</option>
                    <option>/</option>
                    <option>x</option>
                    <option>rem</option>
                </select><br>
                <button name="calc">CALCULATE</button>

    </form><br>
    <h2>
        
    </h2>

    </body>
</html>