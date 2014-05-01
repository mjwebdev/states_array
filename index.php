<html>
<head>
	<title>States Array</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
				echo "<select class='form-control one'>";
				
				foreach ($states as $i) {
					echo "<option value=".$i.">".$i."</option>";
				}
				echo "</select>";
			 ?>

			 <?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ','NJ', 'NY', 'DE');
				echo "<select class='form-control one'>";
				
				foreach ($states as $i) {
					echo "<option value=".$i.">".$i."</option>";
				}
				echo "</select>";
			 ?>

			 <?php 
				 $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
				 echo "<select class='form-control two'>";

				for ($i=0; $i < count($states); $i++) { 
					echo "<option value=".$states[$i].">".$states[$i]."</option>";
				}
				echo "</select>";
			 ?>
		</header>

	</div>