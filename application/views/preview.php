<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Preview</title>
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/styles.css">
</head>
<body>

<div id="container">
	<div id="body">
	<center>
		<br>
		<div style="font-size: 10px;">
    		<a href="home" class="textLogin">Kembali ke Halaman Utama</a>
    	</div>
		<hr>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe width="1060" height="596" src="https://www.youtube.com/embed/aSAKBtGZrQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</center>
	</div>
</div>
    <!-- ini bagian load jquery file js -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <!-- selesai load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>
