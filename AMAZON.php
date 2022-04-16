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
	<div class="col-12 row" style="height: 50px;">
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
	<div class="col-12" style="background-color: #EEF0E2; height: 500px;">
		<div class="row">
			<div>
				<div class="row">
					<div>
						<h1 style="font-family: 'Comfortaa'; font-size: 35px; margin-top: 110px; margin-left: 280px; ">
							Волонтерство
						</h1>
						<h1 style="font-family: 'Comfortaa'; font-size: 35px; margin-left: 280px;">
							 - это возможность
						</h1>
						<h2 style="font-family: 'Comfortaa'; font-size: 20px; margin-left: 280px; color: #A8B081; margin-top: 30px;">
							Станьте волонтером сегодня!
						</h2>
						<h2 style="font-family: 'Comfortaa'; font-size: 20px; color: #A8B081; margin-left: 280px;">
							#вместесэон
						</h2>
					</div>
					<img class="col-4" src="ris.jpeg" style="height: 240px; margin-left: 120px; margin-top: 80px;">	
				</div>

				<div style="row">
					<button class="but" style="background-color: #A8B081; margin-left: 270px;">
						пожертвовать
					</button>
					<button class="but" style="background-color: #FF8516">
						стать волонтером
					</button>
					<button class="but" style="background-color: #6AA59F">
						стать организатором
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12" style="height: 600px;">
		<h1 style="font-family: 'Comfortaa'; font-size: 35px; margin-top: 75px; margin-left: 250px; ">
			Мероприятия:
		</h1>

		<div class="row">
			<div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 250px; background: url(https://cdn.discordapp.com/attachments/964095390137868358/964468630949593148/unknown.png); background-size: 100% 100%">
					<a href="" style="font-weight: 900; text-decoration: none; font-family: 'Comfortaa'; color: white; font-size: 25px;">
						Уборка мусора в населенных пунктах
					</a>
					
				</div>
				<div class="" style="width: 300px; height: 300px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 250px; background: url(https://cdn.discordapp.com/attachments/964095390137868358/964467129476861952/unknown.png); background-size: 100% 100%">
					<a href="" style="font-weight: 900; text-decoration: none; font-family: 'Comfortaa'; color: white; font-size: 25px;">
						Добровольцы на тушение пожаров
					</a>
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 50px; background: url(https://cdn.discordapp.com/attachments/964095390137868358/964468021664034846/unknown.png); background-size: 100% 100%">
					<a href="" style="font-weight: 900; text-decoration: none; font-family: 'Comfortaa'; color: white; font-size: 25px;">
						Работа в детских домах
					</a>
				</div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 50px; background: url(https://anapa.media/wp-content/uploads/2020/11/k2_items_cache_5a0b3452abb1efac9e0dd0f09e87396c_XL.jpg); background-size: 100% 100%">
						<a href="" style="font-weight: 900; text-decoration: none; font-family: 'Comfortaa'; color: white; font-size: 25px;">
						Очищение водоемов
					</a>
				</div>
			</div>
			<div>
				<div class="" style="width: 300px; height: 450px; border-radius: 15px; background-color: #b3b3b3; margin-top: 40px; margin-left: 50px; background: url(unk.png); background-size: 100% 100%">
					<a href="" style="font-weight: 900; text-decoration: none; font-family: 'Comfortaa'; color: white; font-size: 25px;">
						Помощь животным
					</a>
				</div>
				<div class="" style="width: 300px; height: 150px; border-radius: 15px; background-color: #b3b3b3; margin-top: 20px; margin-left: 50px;">
					<a href="index2.php" style="text-decoration: none; font-family: 'Comfortaa'; color: white; font-size: 25px;">
						Больше мероприятий >
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12" style="background-color: #EEF0E2; height: 730px; margin-top: 200px;">
		<a href="reiting.php">
			<h1 style="font-family: 'Comfortaa'; font-size: 35px; padding-top: 35px; margin-left: 250px; ">
				Рейтинг:
			</h1>
		</a>
		<button style="height: 30px; width: 180px; background-color: #A8B081; border-radius: 20px; color: white; margin-top: 5px; margin-left: 245px; border: 2px solid white">
			присоединиться
		</button>

		<div class="row">
			<div style="margin-top: 80px;" class="row">
				<div style="width: 100px; height: 240px; background-color: #A8B081; border-radius: 5px; margin-left: 350px; margin-top: 90px; ">
							
				</div>
				<div>
					<h5 style="font-family: 'Comfortaa'; margin-left: 10px;">
						username
					</h5>
					<div style="width: 100px; height: 300px; background-color: #FF8516; border-radius: 5px; margin-left: 10px; margin-top: 0px; ">
						<h5 style="color: white; font-family: 'Comfortaa'; margin-left: 30px; margin-top: 0px;">
							667
						</h5>	
					</div>
				</div>
				<div style="width: 100px; height: 210px; background-color: #A8B081; border-radius: 5px; margin-left: 10px; margin-top: 120px; ">
							
				</div>
				<div style="width: 100px; height: 170px; background-color: #A8B081; border-radius: 5px; margin-left: 10px; margin-top: 160px; ">
							
				</div>
				<div style="width: 100px; height: 80px; background-color: #A8B081; border-radius: 5px; margin-left: 10px; margin-top: 250px; ">
							
				</div>
				<div style="width: 100px; height: 120px; background-color: #FF8516; border-radius: 5px; margin-left: 10px; margin-top: 210px; ">
							
				</div>
			</div>

			<div>
				<img src="zeml.jfif" style="height: 350px; width: 350px; margin-left: 80px;">
			</div>
		</div>

		<h3 style="color: green; font-family: 'Comfortaa'; margin-top: 50px; margin-left: 560px;">
			Исцелим планету!
		</h3>

		<button style="color: white; font-family: 'Comfortaa'; margin-top: 20px; margin-left: 560px; height: 30px; width: 270px; background-color: #FF8516; border-radius: 20px;">
			стать волонтером
		</button>
	</div>
</body>
</html>
