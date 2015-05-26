<?php

include 'connection.php';
//select query
echo '<html>';
echo '<body>';
echo '<h1> Your Health Results</h1>';

$shirtresults = $mysqli->query("SELECT id, name, neck, sleeve, color, size FROM shirts");


while($shirtrow = $shirtresults->fetch_assoc()){
      echo '<input type ="radio"';
      echo 'name = "shirt" ';
      echo 'value ='.$shirtrow["id"];
      echo ">";
      echo " GPS ";
      echo $shirtrow["name"];
      echo " Reminders ";
      echo $shirtrow["neck"];
      echo " Weater ";
      echo $shirtrow["sleeve"];
      echo " Vital Signs ";
      echo $shirtrow["color"];
      echo '<br>';
      }
?>
