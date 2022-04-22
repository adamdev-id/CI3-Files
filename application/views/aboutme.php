<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/styles.css">
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Me</title>

</head>
<body>
    <div class="mainbgprofile">
	
    	<div style="margin-top: 150px; border-radius: 4px !important;">
			<center>
    			<div id="centerpost" style="width: 350px !important;">
			    	<h5 class="" id="exampleModalLabel">Profile Anda</h5>
    		        <div style="font-size: 10px;">
    		        	<a href="home" class="textLogin">Kembali ke Halaman Utama</a>
    		        </div>
			    	<br>
    		            <form action="profile.php?id=5&type=edit" class="form" method="post" style="width: 350px; border-radius: 3%;">
    		                <div class="">
    		                    <center>
    		                            <img src="https://cdn.discordapp.com/attachments/420913107867664384/859310916285890560/Screenshot_2021-03-15-21-13-42-96.jpg" width="100" style="width: 100px; height: 100px; object-fit: cover; border-radius: 10%;">
    		                    </center>
    		                </div>
    		                <div class="">
			            		<label for="viewUsername" class="form-label">Username</label>
			            		<h3 style="font-size: 20px;">Adam</h3>
			            	</div>
			            	<div class="">
			            		<label for="viewEmail" class="form-label">Email</label>
    		                    <h3 style="font-size: 20px;">adamfriska2905@gmail.com</h3>
			            	</div>
			            	<div class="">
			            		<label for="viewBio" class="form-label">Bio</label>
			            		<h3 style="font-size: 20px;">Hello! I am Adam!, and this is my Biography.</h3>
			            	</div>
    		                <button type="submit" id="submit" name="submit" class="button" disabled>This is your Profile</button>
    		            </form>
    			</div>
			</center>
		</div>
    </div>
</body>
</html>
