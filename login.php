<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <div class="hero">
        <div class="form-box" id="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">LOGIN</button>
                <button type="button" class="toggle-btn" onclick="register()">REGISTER</button>
            </div>
            <form id="login" class="input-group" action="./db/loguser.php" method="post">
                <input type="email" class="input-field" name="email" placeholder="USER-EMAIL" required>
                <input type="password" class="input-field" name="pass" placeholder="ENTER PASSWORD" required>
                <input type="checkbox" class="checkbox"><span style="color: rgb(71, 71, 71);">Remember Password</span>
                <button type="submit" class="submit-btn">LOGIN</button>
            </form>
            <form id="register" class="input-group" action="./db/adduser.php" method="post">
                <input type="text" class="input-field" name="username" placeholder="USER-NAME" required>
                <input type="email" class="input-field" name="email" placeholder="EMIAL-ID" required>
                <input type="password" class="input-field" name="password" placeholder="ENTER PASSWORD" required>
                <br><br>
                <fieldset style="border: none; box-shadow: 7px 5px 20px 9px  #0f661d7e; ">
                    <legend>Gender:</legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="female"> Female </label>&nbsp;
                    <input type="radio" name="gender" value="f">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="male"> Male </label>&nbsp;
                    <input type="radio" name="gender" value="m">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="others"> Others </label>&nbsp;
                    <input type="radio" name="gender" value="o"><br><br>
                </fieldset>

                <br>

                <label for="dob">Date Of Birth :</label>
                <input type="date" name="dob">

                <br><br>

                <label for="weight">Weight :</label>
                <input type="float" name="weight">
                <select name="unit" id="">
                    <option value="kg">KG</option>
                    <option value="lbs">LBS</option>
                </select>

                <br><br><br>

                <label for="height">Height :</label>
                <input type="float" name="height">
                <select name="hUnit" id="">
                    <option value="feet">FT</option>
                    <option value="cms">CMS</option>
                </select>
                <br><br>
                <br>
                <button type="submit" class="submit-btn">REGISTER</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var a = document.getElementById("form-box")
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "88px";
            y.style.width = "340px";
            z.style.left = "110px";
            a.style.width = "500px";
            a.style.height = "620px"
            a.style.transition = "0.5s";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
            a.style.width = "380px";
            a.style.height = "480px";
        }
    </script>
</body>
</html>