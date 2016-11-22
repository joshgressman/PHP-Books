
<?php $pageTitle ="Full Catalog";
/////////////////////////ARRAY SET UP WITH CUSTOM KEYS////////////////////////
$catalog = array();

  $catalog[101] = "Design Patterns"; // added to the array
  $catalog[201] = "Forrest Gump"; // added to the array
  $catalog[301] = "Beeathoven"; // added to the array
  $catalog[102] = "Clean Code"; // added to the array

/////////////////////////////[###] = key value ////////////////////////////////

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

<div class="section page">
  <div class="wrapper">
    <h1><?php echo $pageTitle ?></h1>
    <ul>
      <?php foreach($catalog as $item){
        echo "<li>" . $item . "</li>";
      }
      ?>
    </ul>
  </div>
</div>
<?php include("include/footer.php");?>
