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
				Горячие мероприятия:
			</h1>
			<div class="row">
				<div>
					<img style="height: 50px; width: 50px; margin-top: 150px; margin-left: 250px;" src="str.png">
				</div>
				<div>
			    	<img style="height: 250px; width: 350px; margin-left: 50px; margin-top: 50px; border-radius: 10px;" src="https://ic.pics.livejournal.com/antontretiakov/19350692/59009/900.jpg">
				</div>
			    <div>
			        <h1 style="font-family: 'Comfortaa'; font-size: 33px; padding-top: 55px; margin-left: 20px; ">
			        	Сбор мусора вокруг
			        </h1>
			        <h1 style="font-family: 'Comfortaa'; font-size: 33px; margin-left: 20px; ">
			        	озера Сайсаары
			        </h1>
			        <h1 style="font-family: 'Comfortaa'; font-size: 20px; margin-left: 20px; ">
			        	Организаторы: HealthyGol(1233)
			        </h1>
			        <button style="color: white; font-family: 'Comfortaa'; margin-top: 10px; margin-left: 20px; height: 30px; width: 230px; background-color: #FF8516; border-radius: 20px; border: 1px solid white;">
							присоединиться
					</button>
					<h1 style="font-family: 'Comfortaa'; font-size: 20px; margin-left: 20px; margin-top: 10px; color: #A8B081;">
			        	Контакты:
			        </h1>
			        <h1 style="font-family: 'Comfortaa'; font-size: 20px; margin-left: 20px; color: #A8B081;">
			        	+7(999)999-99-99
			        </h1>
			        <h1 style="font-family: 'Comfortaa'; font-size: 20px; margin-left: 20px; color: #A8B081;">
			        	healthygol@gmail.ru
			        </h1>
			    </div>
			    <div>
					<img style="height: 50px; width: 50px; margin-top: 150px; margin-left: 20px;" src="str2.png">
				</div>
			</div>
	</div>
	<div class="col-12" style="height: 1600px; background-color: #EEF0E2">
		<h1 style="font-family: 'Comfortaa'; font-size: 35px; padding-top: 75px; margin-left: 250px; ">
			Горячие мероприятия:
		</h1>

		<div class="row">
			<div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 150px;">

					
				</div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 150px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 25px;">
						
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
		</div>
		<div class="row">
			<div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 150px;">

					
				</div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 150px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 25px;">
						
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 25px;">
					
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 25px;">
					
				</div>
			</div>
		</div>
		<div style="margin-left: 650px; margin-top: 50px;">
			<a href="" style="font-family: 'Comfortaa'; color: gray; font-size: 25px;">
				Загрузить еще
			</a>
		</div>
	</div>
</body>
</html>
