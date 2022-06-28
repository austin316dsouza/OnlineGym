<?php
  include 'db/dbconnect.php';
  if(isset($_POST['usern'])){
    $sel = "SELECT * FROM `stat` WHERE `uid` = '".$_POST['usern']."'";
    $req = mysqli_query($conn,$sel);
    echo '<table>';
    echo '<tr>';
    echo '<td>Number Of Days</td>';
    echo '<td>Total Time</td>';
    echo '<td>Calories</td>';
    echo '</tr>';
    while($res = mysqli_fetch_array($req)){
        echo '<tr><td>'.$res['dayCount'].'</td><td>'.$res['timeCount'].'</td><td>'.$res['calories'].'</td></tr>';
    }
    echo '</table>';
    echo '</div>';
  }
?>