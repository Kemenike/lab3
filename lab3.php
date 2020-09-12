<?php
$param = $_GET['param'];
echo "param is: " . $param . "<br>";
if($param == "hello") {
    echo "hey there! <br>";
}
else { 
    $num = $param*2+3;
    echo "number:" . $num . "<br>";
}
echo "<br>";
echo "<img src=\"diagram1.gif\" style=\"width:250px;height:auto;\"/>";
?>
