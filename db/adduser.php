<?php
    include ("./dbconnect.php");

    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    $querry= "insert into user(username,email,password,gender,dob,weight,height) values('".$username."','".$email."','".$pass."','".$gender."','".$dob."','".$weight."','".$height."');";
    if(mysqli_query($conn,$querry)){
        echo "<br>New record inserted successfully";
        header("location:../login.php");
    }else {
        echo "Error: " . $querry . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    
?>