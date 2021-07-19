<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Nice School,Cuttack</title>
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="">
		<div class="container">
		<?php include"navbar.php";?>
		<img src="img/b1.jpg" width="100%">

		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

					Little Flower English Medium High School<BR>
					Hostel City,Lane 10,<BR>
					Near COMSATS Islamabad, Opp Rahat Bakers,<BR>
					Chak Shahzad,Islamabad<BR>
					Mail - iamibadd@gmail.com<br>Phone - 0316-9658512
				</form>
			</div>
		</div>
		<div class="footer">
		<footer><p>Copyright &copy; Scnz & sons.</p></footer>
		</div>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});

			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>



	</body>
</html>
