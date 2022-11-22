<?php

$server = "localhost";
$username = "root";
$password = "";

$conf = mysqli_connect($server, $username, $password);

if(!$conf){
    die("connection to this database is failed" . mysqli_connect_error());
}


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile_number = $_POST['mobile_number'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `college`.`sudent_data` ( `first name`, `last name`, `mobile_number`, `gender`, `password`) VALUES ( '$fname', '$lname', '$mobile_number', '$gender', '$password');";

    if($conf->query($sql) == true){
        echo "successfully inserted the data";
    }

    $conf->close();

?>
