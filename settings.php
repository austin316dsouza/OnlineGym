<?php 
   
    session_start();
    if(!$_SESSION["uname"])
    {
        header("location:./login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETTINGS</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/setting.css">
    <link rel="stylesheet" href="CSS/header.css">
	<link rel="stylesheet" href="CSS/footer.css">
</head>

<body>
    <?php include("./header.php"); ?>

    <section class="py-5 my-5">
        <div class="container">
            <h1 style="color: white;" class="mb-5">Account Settings</h1>
            <div class="bg-white shadow rounded-lg d-block d-sm-flex" style="background-color: black; color: white;">
                <div class="profile-tab-nav border-right" style="background-color: black;">
                    <div class="p-4" style="background-color: black; color: white;">
                        <div class="img-circle text-center mb-3" style="background-color: black;">
                            <img src="img/user.jpg" alt="Image" class="shadow">
                        </div>
                        <h4 class="text-center"><?php echo $_SESSION["uname"];?></h4>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: black;">
                        <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
                            aria-controls="account" aria-selected="true" style="color: white;">
                            <i class="fa fa-home text-center mr-1"></i>
                            Account
                        </a>
                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                            aria-controls="password" aria-selected="false" style="color: white;">
                            <i class="fa fa-key text-center mr-1"></i>
                            Password
                        </a>
                    </div>
                </div>
                <form action="./settings.php" method="post">
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent" style="background-color: black; color: #fff;">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4">Account Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['uname']?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>BirthDate</label>
                                    <input type="date" name="dob" class="form-control" value="<?php echo $_SESSION['dob']?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $_SESSION['phone']?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input type="float" name="weight" value="<?php echo $_SESSION["weight"]?>" class="form-control"
                                        style="width: 150px; display: inline-block;">
                                    <select name="unit" class="form-control"
                                        style="width: 100px; display: inline-block;">
                                        <option value="kg">KG</option>
                                        <option value="lbs">LBS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Height</label>
                                    <input type="float" name="height" value="<?php echo $_SESSION["height"]?>" class="form-control"
                                        style="width: 150px; display: inline-block;">
                                    <select name="hUnit" class="form-control"
                                        style="width: 100px; display: inline-block;">
                                        <option value="feet">FT</option>
                                        <option value="cms">CMS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bio</label>
                                    <textarea class="form-control" name="bio"
                                        rows="4"><?php echo $_SESSION["bio"]?></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" name="update" type="submit"
                                style="color: yellowgreen; background-color: rgb(0, 75, 4);">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <h3 class="mb-4">Password Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" name="update"
                                style="color: yellowgreen; background-color: rgb(0, 75, 4);">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Updating -->
<?php
    if(isset($_POST["update"])){
      
    
      include("./db/dbconnect.php");
      
      $querry='update user set username="'.$_POST["username"].'",email="'.$_POST["email"].'",dob="'.$_POST["dob"].'",phone="'.$_POST["phone"].'",weight="'.$_POST["weight"].'",height="'.$_POST["height"].'",bio="'.$_POST["bio"].'" where uid="'.$_SESSION["uid"].'";';      
      if($conn->query($querry)){
        
        echo '<script>alert("Update Successful!! please login again!")</script>';
        header("location:./logout.php");
    }
    }
?>

    <?php include("./footer.php"); ?>

   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>