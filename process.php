<?php
//these varibles will store that values of the form.["name"] links with name classification
  $name = $_POST["name"];
  $email = $_POST["email"];
  $details = $_POST["details"];

 echo "<pre>";
 $email_body = "";
 $email_body .= "Name " . $name . "\n";
 $email_body .= "Email ". $email . "\n";
 $email_body .= "Details " . $details . "\n";
 echo $email_body;
 echo "</pre>";

 //.= adds the value of new varible value to the old varibale concatinates one
 //after the other. will return
//  Name Joshua Gressman
// Email joshgressman@gmail.com
// Details ferfe
 ?>
