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
    <title>CONTACT US</title>
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>
    <?php include("./header.php"); ?>

    
    <br><br>

        <div class="container">
            <div class="row">
                <div class="col-1">
                    <h2>AUSTIN D'SOUZA</h2>
                    <h4>EMIAL ID: austin316dsouza@gmail.com</h4>
                    <h4>PHONE NUMBER: 9096487684</h4>
                </div>
                <div class="col-2">
                    <img src="img/austin.jpg" class="controller">
                    <div class="color-box"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <h2>PRAHARSH PAI</h2>
                    <h4>EMIAL ID: dementor1901@gmail.com</h4>
                    <h4>PHONE NUMBER: 9834686910</h4>
                </div>
                <div class="col-2">
                    <img src="img/praharsh.jpg" class="controller">
                    <div class="color-box"></div>
                </div>
            </div>
        </div>


        <section id="contact">
            <div class="services-info">
                <h1>Get in<span style="color: yellowgreen;">Touch</span></h1>
                <p> We are Available</p>
            </div>
    
            <div class="contact-row">
                <div class="contact-left-col">
                    <div class="form">
                        <input type="text" name="" placeholder="E-mail">
                        <input type="text" name="" placeholder="Subject"><br>
                        <textarea rows="10" cols="40" placeholder="Message"></textarea>
                        <br> <button class="c_btn">Send</button>
                    </div>
                </div>
                <div class="contact-right-col">
                    <h1>
                        <ion-icon name="mail-outline"></ion-icon>E-mail
                    </h1>
                    <p>dementor1901@gmail.com</p><br>
                    <h1>
                        <ion-icon name="call-outline"></ion-icon>Mobile
                    </h1>
                    <p>9834686910</p>
                    <br>
                    <h1>
                        <ion-icon name="location-outline"></ion-icon>Address
                    </h1>
                    <p> Information Technology<br>
                        GEC Farmagudi Ponda Goa, India
                    </p>
                </div>
            </div>
        </section>

        <?php include("./footer.php"); ?>
    
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>    
</body>
</html>