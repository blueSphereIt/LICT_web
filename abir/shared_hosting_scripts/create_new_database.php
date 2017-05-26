<?php
/**
 * Created by PhpStorm.
 * User: bmabi
 * Date: 5/26/2017
 * Time: 8:54 PM
 *
 * config:-
 * 1. change userName var
 * 2. change password var
 * 3. change the newDatabaseName var
 */

$userName="abir";
$password="assassin32";
$newDatabaseName="data_root";


//////////////////////////////////////////// Do not change in here///////////////////////

//the example of making MySQL database

$con= mysqli_connect("localhost",$userName,$password);
if($con){
    echo("Connection is succeed");
}else{
    echo("Connection is fail");
}
$sql="CREATE DATABASE $newDatabaseName";
echo $sql;
if($con->query($sql) == TRUE){
    echo("<br><br>Database data_root succeeds in making");
}else {
    echo("<br><br>Database data_root fails in making");
}
//$make = mysqli_query("CREATE DATABASE .$newDatabaseName"[],$continued);

?>