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
      echo " Shirt name: ";
      echo $shirtrow["name"];
      echo " Shirt neck: ";
      echo $shirtrow["neck"];
      echo " Shirt sleeve: ";
      echo $shirtrow["sleeve"];
      echo " Shirt color: ";
      echo $shirtrow["color"];
      echo " Shirt size: ";
      echo $shirtrow["size"];
      echo '<br>';
      }
?>
