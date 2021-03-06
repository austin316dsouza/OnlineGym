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
    <title>HOME</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php include("./header.php"); ?>
    <section class="sec1">
        <div class="maindiv">
            <div class="content">
                <h3>Be Strong, Be Fit &nbsp &nbsp<span style="font-size: 2.5em;
    font-weight: 900;
    color: yellowgreen;"><?php echo $_SESSION["uname"];?></span></h3>
                <h2>Make yourself stronger than your excuses.</h2>
                <a href="workout.php" class="btn">GET STARTED</a>
            </div>
        </div>
    </section>

    <div class="separation"></div>

    <section id="work">
        <div class="services-info">
            <h1>Our <span style="color: yellowgreen;">Works</span></h1>
            <p>What we Provide</p>
        </div>
        <div class="services-row">
            <div class="work-box">
                <img src="img/ex1.jpg">
            </div>
            <div class="work-box">
                <img src="img/ex2.jpg">
            </div>
            <div class="work-box">
                <img src="img/ex3.jpg">
            </div>
            <div class="work-box">
                <img src="img/ex4.jpg">
            </div>
            <div class="work-box">
                <img src="img/ex5.jpg">
            </div>
            <div class="work-box">
                <img src="img/ex6.jpg">
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".work-box").mouseenter(function(){
                    $(this).animate({
                        left: '250px',
                        opacity: '1',
                        height: '380px',
                        width: '600px',
                    });
                    $(this).css('z-index', 5)
                });
                $(".work-box").mouseleave(function(){
                    $(this).animate({
                        left: '250px',
                        opacity: '0.5',
                        height: '280px',
                        width: '400px'
                    });
                    $(this).css('z-index', 2)
                });
            });
        </script>
    </section>

    <div class="separation"></div>

    <section class="sec2">
        <h1>Our Users</h1>
        <div class="maindiv2">
            <div class="maindiv2-img1"></div>
            <div class="maindiv2-img2"></div>
        </div>
    </section>

    <div class="separation"></div>

    <section class="sec3">
        <div class="maindiv3">
            <div class="maindiv3-img2"></div>
        </div>
    </section>

    <div class="separation"></div>

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