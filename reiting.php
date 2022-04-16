<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <style type="text/css">
  	.but{
  		border-radius: 30px;
  		width: 250px;
  		color: white;
  		margin-top: 50px;
  		margin-left: 110px;
  		font-family: 'Comfortaa';
  	}
  </style>
</head>
<body>
	<?php 
 	$connection_to_database = mysqli_connect('127.0.0.1', 'root', '', 'vk');
 	$select_user = "SELECT * FROM users WHERE id='{$_SESSION['id']}'";
 	$query_user = mysqli_query($connection_to_database, $select_user);
 	$user = mysqli_fetch_assoc($query_user);
 ?>
	<div class="col-12 row" style="height: 50px; border-bottom: 1px solid gray;">
		<img src="ic3.png" style="height: 30px; width: 30px; margin-left: 130px; margin-top: 9px;">
		<a href="AMAZON.php">
			<img src="logo2.jpeg" style="height: 38px; width: 65px; margin-left: 26px; margin-top: 6px;">
		</a>
		<input type="" name="" style="height: 25px; border-radius: 20px; width: 370px; background-color: #EEF0E2; border: none; margin-left: 330px; margin-top: 10px;">
		<img src="kalend.png" style="height: 30px; width: 30px; margin-left: 200px; margin-top: 9px;">
		<a href="Lichnkab.php">
			<img src="lichn2.png" style="height: 30px; width: 30px; margin-left: 33px; margin-top: 9px;">
		</a>
	</div>
	<div class="col-12" style="background-color: white; height: 500px;">
			<h1 style="margin-top: 70px; font-family: 'Russo One'; font-size: 35px; margin-left: 240px; color: #4D6454">
				Рейтинг:
			</h1>
			<div class="" style="height: 10px; border-bottom: 2px solid #EEF0E2; width: 1000px; margin-left: 240px;">
				
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					username1
				</p>
				<p style="margin-top: 10px; margin-left: 620px;">
					Балллы: 1456
				</p>
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					username2
				</p>
				<p style="margin-top: 10px; margin-left: 620px;">
					Балллы: 1400
				</p>
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					username3
				</p>
				<p style="margin-top: 10px; margin-left: 620px;">
					Балллы: 1356
				</p>
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					username4
				</p>
				<p style="margin-top: 10px; margin-left: 620px;">
					Балллы: 1304
				</p>
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					username5
				</p>
				<p style="margin-top: 10px; margin-left: 620px;">
					Балллы: 1009
				</p>
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px; border: 2px solid green;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					Вы
				</p>
				<p style="margin-top: 10px; margin-left: 675px;">
					Балллы: 956
				</p>
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					username7
				</p>
				<p style="margin-top: 10px; margin-left: 620px;">
					Балллы: 800
				</p>
			</div>
			<div class="row" style="height: 50px; background-color: #EEF0E2; margin-top: 10px; width: 1000px; margin-left: 240px;">
				<img style="height: 30px; width: 30px; margin-top: 7px; margin-left: 20px;" src="lichn2.png">
				<p style="margin-top: 10px; margin-left: 20px;">
					username8
				</p>
				<p style="margin-top: 10px; margin-left: 620px;">
					Балллы: 66
				</p>
			</div>
	</div>
</body>
</html>
