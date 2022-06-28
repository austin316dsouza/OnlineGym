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
        $querry2="select * from user order by uid desc limit 1;";
        $result2 = mysqli_query($conn,$querry2);
        if(mysqli_num_rows($result2)>0){
            while($row = mysqli_fetch_assoc($result2)){
                $querry3= "insert into stats(uid,dayCount,timeCount,calories) values('".$row["uid"]."',1,0.0,0.0);";
                mysqli_query($conn,$querry3);
            }
        }
        header("location:../login.php");
    }else {
        echo "Error: " . $querry . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>