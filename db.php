<?php 
    $servername = "localhost";
    $username = "shjeon";
    $password = "Shjeon1374!";
    $dbname = "member_information";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die ('connection faild:'.$conn->connect_error);
    }
?>