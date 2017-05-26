<?php
/**
 * Created by PhpStorm.
 * User: bmabi
 * Date: 5/19/2017
 * Time: 1:24 PM
 */

echo "<h2>Hello world!!<h2>";

echo "<p style='font-size:22px;'> This is the a paragraph </p>";
echo "<pre>";
$x =3;
var_dump($x);
//$x .=3;
//var_dump($x);
//$x=5.7;
//var_dump($x);
if (is_string($x)){
    echo $x;
}
else{
    echo "Sorry not found";
}



?>