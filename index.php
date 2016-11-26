<?php $pageTitle ="Personal Media Library";
include("include/data.php");
include("include/functions.php");
$section = null;
include("include/header.php"); ?> <!--include header to header -->
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

			   	<ul class="items">

						<?php
              $random = array_rand($catalog,4);
						foreach($random as $id){
							echo get_item_html($id,$catalog[$id]);
						}
						?>
					</ul>

			</div>

		</div>

	<?php include("include/footer.php");?>
