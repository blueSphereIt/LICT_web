<?php
/**
 * Created by PhpStorm.
 * User: bmabi
 * Date: 5/26/2017
 * Time: 10:11 PM
 */
<?php
//the example of making MySQL database table
//create_table.php
$continued = mysql_connect("localhost","abir","assassin32");
if($continued){
    echo("Connection is succeed");
}else{
    echo("Connection is fail");
}
$make = mysql_query("CREATE DATABASE employees",$continued);
if($make){
    echo("<br><br>Employees database succeeds in making");
}else{
    echo("<br><br>Employees database fails in making");
}
$order1 = "CREATE TABLE data_employees
(
employees_number int(10)AUTO_INCREMENT PRIMARY KEY,
name char(100),
address varchar(255)
)";
mysql_select_db("employees");

$make_table = mysql_query($order1);
if($make_table){
    echo("<br><br>Table data_employees succeeds in making");
}else{
    echo("<br><br>Table data_employees fails in making");
}
?>