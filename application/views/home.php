<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- ini bagian dari load bootstrap file css -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/styles.css">
    <!-- selesai load bootstrap css file -->
 
  </head>
  <body>
    <div class="backdrop">
		<div style="margin-top: 60px;">
			<center>
                <h3 class="" id="exampleModalLabel">Homepage</h3>
				<br>
				<form action="aboutme" class="form" method="post">

				<button type="submit" id="submit" name="submit" class="button">Open Profile</button>
				<hr>

				<div style="font-size: 10px;">
                	Watch our Gameserver Preview here!
                	<a href="preview" class="textLogin">Click to see Preview</a>
                </div>
				</form>
			</center>
		</div>
    </div>
    <!-- ini bagian load jquery file js -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <!-- selesai load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>