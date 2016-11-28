<?php $pageTitle = "Suggest a Media Item";
$section = "suggest";
include("include/header.php"); ?> <!--include header to header -->

<div class="section page">
  <div class="wrapper">
    <h1>Suggest a Media Item</h1>
    <P>If you think there is something I&rsquo;m missing, let me know! Complete the form to
    send me an email.</P>
    <form method="post" action="process.php">  
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
      </table>
      <input type="submit" value="send" />
    </form>
  </div>
</div>

<?php include("include/footer.php");?>
