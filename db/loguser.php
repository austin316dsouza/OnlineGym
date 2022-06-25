<?php 
    session_start();
?>
<?php
    include ("../db/dbconnect.php");
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $querry= "select * from user";
    $result = mysqli_query($conn,$querry);
    

    $found = false;
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($email==$row["email"] && $pass==$row["password"]){
                $_SESSION["uname"]= $row["username"];
                $_SESSION["uid"]= $row["uid"];
                $_SESSION["email"]= $row["email"];
                $_SESSION["phone"]= $row["phone"];
                $_SESSION["dob"]= $row["dob"];
                $_SESSION["height"]= $row["height"];
                $_SESSION["weight"]= $row["weight"];
                $_SESSION["bio"]= $row["bio"];
                $found = true;
            
                header("location:../home.php");
                
            }
        }
        if(!$found){
            echo '<script>alert("Invalid Email or Password.")</script>';
            header("location:../login.php");
        }
           
    }else{
            echo "0 results";
    }
    mysqli_close($conn);
?>