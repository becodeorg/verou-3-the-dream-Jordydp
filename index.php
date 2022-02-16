<?php
//var_dump($_POST);
//echo $_POST["destination_currency"];
$yen = 131.78;
$canadianDollar =1.44;
$swissFrank = 1.05;
$euro = intval($_POST["destination_currency"]);

if($_POST["currencytype"] =="Japan"){
    $result = $euro * $yen;
    $resultString = "<br>you will get " . number_format($result, 2, ',', ' ') .  " Japanese yen!";

}else if($_POST["currencytype"] =="Canada")
{
    $result = $euro * $canadianDollar;
    $resultString = "<br> You will get ". number_format($result,2, ',', ' ') . " Canadian Dollars";

}else if($_POST["currencytype"] =="Switzerland")
{
    $result = $euro * $swissFrank;
    $resultString = "<br> You will get ". number_format($result,2, ',', ' ') . " Swiss Franc";
    
}else
{
    $resultString= "Select your Final destination";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
<form action="" method="post"> 
    <label for="destination_currency"><h1>How much euro's you want to spend in<h1></label><br>
    <input type="radio" id="japan" name="currencytype" value="Japan">Japan<br>
    <input type="radio" id="Canada" name="currencytype" value="Canada">Canada<br>
    <input type="radio" id="Switzerland" name="currencytype" value="Switzerland">Switzerland<br>
    <input type="number" name="destination_currency" id="destination_currency"  /><br>
    <input type ="submit">
    <div class="result">
        <?=$resultString?>
    </div>
</form>
<div>

</div>
</body>
</html>






