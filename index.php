<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<div>
    <h1>Calculator</h1>
</div>

<P>
<form method="get" action="index.php">
    <input name="v1"/>
    <select name="action">
        <option value="add">+</option>
        <option value="subtract">-</option>
    </select>   
    <input name="v2">
    <input type="submit" name="submit" value="Submit"/>
</form>
</p>

<p>
<?php

    if(isset($_GET["submit"])){
        $v1 = $_GET["v1"];
        $v2 = $_GET["v2"]; 

        if($_GET["action"]=="add"){
            $result = $v1+$v2;
            echo "<h1>$v1 + $v2";
        }else{
            $result = $v1-$v2;  
            echo "<h1>$v1 - $v2";
        }
        echo "= $result";
    }

?>
</p>

</body>
</html>