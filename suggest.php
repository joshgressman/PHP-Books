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
  header("location:suggest.php?status=thanks"); //will redirect to thanks message
}


//To do: send email

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
