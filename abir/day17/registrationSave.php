<?php
 echo '<pre>';
 var_dump($_POST);
 var_dump($_FILES);
//connect to the database
 $con = mysqli_connect("localhost","abir","assassin32","brac_ofs");

 //check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to Mysqli:" . mysqli_connect_error();
}else {

    if (isset($_POST['regButton'])) {
        $name = $_POST['name'];
        $id = $_POST['studentId'];
        $email= $_POST['email'];
        echo "form data obtained";
    }
    if (empty($name) OR empty($id)) {
        echo "Unable to fetch form data";
    } else {
        $insert_sql="INSERT INTO users (name, id, email) VALUE ('$name', '$id', '$email')";
        echo $insert_sql;
        if(mysqli_query($con,$insert_sql)){
            echo "User Registration successful";
        }else{
            echo "Unable to save form data";
        }

    }
}