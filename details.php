<?php

include("include/data.php");
include("include/functions.php");
/////////////////////Condition for section select in header ///////////////////



if(isset($_GET["id"])){
  $id = $_GET["id"];
  if (isset($catalog[$id])){
    $item = $catalog[$id];
  }
}

if (!isset($item)){
  header("location:catalog.php");
  exit;
}

$pageTitle ="Item Title";
$section = null;
include("include/header.php"); ?>

<div class="section page">
  <div class="wrapper">
    <div class="media-picture">
      <span>
    <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["titel"]; ?>" />
  </span>
    </div>
  </div>
</div>
