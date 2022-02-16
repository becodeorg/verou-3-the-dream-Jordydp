<?php
//var_dump($_POST);
//echo $_POST["destination_currency"];
$yen = 131.78;
$euro = intval($_POST["destination_currency"]);
$result = $euro * $yen;
$resultString = strval($result);
echo "<br>"."you will get " . $result . " Japanese yen";
?>

<form action="" method="post">
    <label for="destination_currency">How much euro's you want to spend in Japan?</label>
    <input type="number" name="destination_currency" id="destination_currency"  /><br>
    <input type ="submit">
</form>