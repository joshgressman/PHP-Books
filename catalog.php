
<?php $pageTitle ="Full Catalog";

include("include/data.php");
include("include/functions.php");
/////////////////////Condition for section select in header ///////////////////


$section = null;
if(isset($_GET["cat"])){
  if($_GET["cat"] == "books"){
    $pageTitle = "Books";
    $section = "books";
  } elseif ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } elseif ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}
include("include/header.php"); ?>

<div class="section catalog page">
  <div class="wrapper">
    <h1><?php
     if($section != null){
       echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
     }
     echo $pageTitle?></h1>

    <ul class="items">
      <?php
      $catagories = array_catagory($catalog,$section);
    foreach($catagories as $id){
      echo get_item_html($id,$catalog[$id]);
    }
      ?>
    </ul>
  </div>
</div>
<?php include("include/footer.php");?>
