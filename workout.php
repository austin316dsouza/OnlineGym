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
    <title>WORKOUT</title>
    <link rel="stylesheet" href="CSS/workout.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">

</head>

<body>
    <?php include("./header.php"); ?>
    
    <?php 
        $daynum = 1;
    ?>

    <div class="status">
        <div>
            <br>
            <h1>BURN BELLY FAT</h1><br>
            <h3>Day <span id="daynum"><?php echo $daynum ?></span></h3><br>
            <h3>12 Excercises || 15 Minute || ~ 142 Calorie</h3><br>
        </div>
    </div>
    

    
    <!-- <script>const appendday = document.getElementById("daynum").innerHTML;
        console.log("daynum ="+appendday);
    </script> -->

    <div class="startTimer">
        <button id="button-start">Start</button>
        <button id="button-stop">Stop</button>
        <button id="button-reset">Reset</button>
        <h3 id="timer">DURATION<p>&nbsp;&nbsp;<span id="seconds">00</span>:<span id="tens">00</span></p>
        </h3>
        <h2 style="color: yellowgreen;">Completed <span id="counter">0</span><span>/12</span></h2>
    </div>
    <div class="excercises">
        <div class="exercise jumpingJacks">
            <img src="img/jumpingJacks.gif" width="350px" alt="">
            <h2>1/12 || JUMPING JACKS</h2>
            <h3>20 s</h3>
            <button class="jojobtn" id="btn1" onclick="DoneCounter('btn1')">DONE</button>
        </div>
        <div class="exercise mountainClimber">
            <img src="img/mountainClimber.gif" alt="">
            <h2>2/12 || MOUNTAIN CLIMBER</h2>
            <h3>25 s</h3>
            <button class="jojobtn" id="btn2" onclick="DoneCounter('btn2')">DONE</button>
        </div>
        <div class="exercise bicycleCrunches">
            <img src="img/bicycleCrunches.gif" alt="">
            <h2>3/12 || BICYCLE CRUNCHES</h2>
            <h3>25 s</h3>
            <button class="jojobtn" id="btn3"onclick="DoneCounter('btn3')">DONE</button>
        </div>
        <div class="exercise longArmCrunches">
            <img src="img/longArmCrunches.gif" alt="">
            <h2>4/12 || LONG ARM CRUNCHES</h2>
            <h3>10</h3>
            <button class="jojobtn" id="btn4" onclick="DoneCounter('btn4')">DONE</button>
        </div>
        <div class="exercise crunches">
            <img src="img/crunches.gif" alt="">
            <h2>5/12 || CRUNCHES</h2>
            <h3>10</h3>
            <button  class="jojobtn" id="btn5"onclick="DoneCounter('btn5')">DONE</button>
        </div>
        <div class="exercise russianTwist">
            <img src="img/russianTwist.gif" alt="">
            <h2>6/12 || RUSSIAN TWISTS</h2>
            <h3>16 (8 each side)</h3>
            <button class="jojobtn" id="btn6" onclick="DoneCounter('btn6')">DONE</button>
        </div>
        <div class="exercise bicycleCrunches">
            <img src="img/bicycleCrunches.gif" alt="">
            <h2>7/12 || BICYCLE CRUNCHES</h2>
            <h3>25 s</h3>
            <button class="jojobtn" id="btn7" onclick="DoneCounter('btn7')">DONE</button>
        </div>
        <div class="exercise longArmCrunches">
            <img src="img/longArmCrunches.gif" alt="">
            <h2>8/12 || LONG ARM CRUNCHES</h2>
            <h3>10</h3>
            <button class="jojobtn" id="btn8" onclick="DoneCounter('btn8')">DONE</button>
        </div>
        <div class="exercise crunches">
            <img src="img/crunches.gif" alt="">
            <h2>9/12 || CRUNCHES</h2>
            <h3>10</h3>
            <button class="jojobtn" id="btn9" onclick="DoneCounter('btn9')">DONE</button>
        </div>
        <div class="exercise russianTwist">
            <img src="img/russianTwist.gif" alt="">
            <h2>10/12 || RUSSIAN TWISTS</h2>
            <h3>16 (8 each side)</h3>
            <button class="jojobtn" id="btn10" onclick="DoneCounter('btn10')">DONE</button>
        </div>
        <div class="exercise cobraStretch">
            <img src="img/cobraStretch.gif" alt="">
            <h2>11/12 || COBRA STRETCH</h2>
            <h3>30 s</h3>
            <button class="jojobtn" id="btn11" onclick="DoneCounter('btn11')">DONE</button>
        </div>
        <div class="exercise lyingTwist">
            <img src="img/lyingTwist.gif" alt="">
            <h2>12/12 || LYING TWIST</h2>
            <h3>30 s (Both Sides)</h3>
            <button class="jojobtn" id="btn12" onclick="DoneCounter('btn12')">DONE</button>
        </div>
    </div>

    <?php include("./footer.php"); ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>

    </script>
    <script src="JS/workoutscript.js"></script>

</body>

</html>