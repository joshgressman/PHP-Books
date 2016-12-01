<?php $pageTitle = "Suggest a Media Item";
//form verification with trim, filter input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =  trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));;
  $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));;

  if ($name == "" || $email == "" || $details == ""){
      echo "Please fill out the required fields: name, email and details";
      exit; //stops the process
    }
 if ($_POST["address"] != ""){
    echo "Bad form input";
    exit;
  }
////*********This is the email body****************************************//
require("include/phpmailer/class.phpmailer.php"); //includes php mailer third party

$mail = new PHPMailer;
if (!$mail->ValidateAddress($email)){
  echo "Invalid Email";
  exit;
}


  $email_body = "";
  $email_body .= "Name " . $name . "\n";
  $email_body .= "Email ". $email . "\n";
  $email_body .= "Details " . $details . "\n";
  ///**********PHP MAILER INFO FROM GITHUB********************************//
  $mail->setFrom($email, $name);
  $mail->addAddress('joshgressman@gmail.com', 'Josh Gressman');   // Add a recipient
  // $mail->addAddress('ellen@example.com');    // additional email
  $mail->isHTML(false); // We want to send as text so set to false

  $mail->Subject = 'Personal Media Library Suggestion ' . $name;
  $mail->Body    = $email_body;

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
      exit; // stop if error
  } 

  header("location:suggest.php?status=thanks"); //will redirect to thanks message
}




$pageTitle = "Suggest a Media Item";
$section = "suggest";
include("include/header.php"); ?> <!--include header to header -->

<div class="section page">
  <div class="wrapper">
    <h1>Suggest a Media Item</h1>
    <?php if(isset($_GET["status"]) && $_GET["status"] == "thanks"){
      echo "<p>
        Thanks for the email! I&rsquo;ll check out your suggestion shortly!
      </p>";
    } else { ?>
    <P>If you think there is something I&rsquo;m missing, let me know! Complete the form to
    send me an email.</P>
    <form method="post" action="suggest.php">
      <table>
        <tr>
          <th><label for="name">Name</label></th>
          <td><input type="text" id="name" name="name" /></td>
        </tr>
        <tr>
          <th><label for="email">Email</label></th>
          <td><input type="text" id="email" name="email" /></td>
        </tr>
        <tr>
          <th><label for="details">Suggest Item Details</label></th>
          <td><textarea type="text" id="details" name="details"></textarea></td>
        </tr>
        <tr style="display: none">
          <th><label for="address">Address</label></th>
          <td><input type="text" id="address" name="address" /></td>
        </tr>
      </table>
      <input type="submit" value="send" />
    </form>
    <?php } ?>
  </div>
</div>

<?php include("include/footer.php");?>
