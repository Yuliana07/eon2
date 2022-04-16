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
  <link href="http://fonts.cdnfonts.com/css/russo-one" rel="stylesheet">
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
  	* {
		box-sizing: border-box;
	}

	body {
		background: #121314;
	}

	body > ul {
		width: 800px;
		height: 200px; 
		left: 50%;
		margin-left: -400px;
		margin-top: 500px;
		position: absolute;
	}
 
	ul > li {
		width: 25%;
		position: absolute;
		list-style-type: none;
		top: 0;
		padding: 20px;
		height: 200px; 
		opacity: 0;
		text-align: center;
		transition: 1s opacity; 
		margin-top: 450px;
	}

	.active {
		opacity: 1;
	}
  
	p {
		font-family: sans-serif;
		font-size: 13px;
    color: #646566;
		line-height: 1.5em;
	}

	strong { 
    color: #fff;
    font-weight: 700;
		font-size: 60px; 
    line-height: 100px; 
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
	<div class="col-12 row shadow-sm" style="height: 50px; background-color: white;">
		<img src="ic3.png" style="height: 30px; width: 30px; margin-left: 130px; margin-top: 9px;">
		<a href="AMAZON.php">
			<img src="logo2.jpeg" style="height: 38px; width: 65px; margin-left: 26px; margin-top: 6px;">
		</a>
		<input type="" name="" style="height: 25px; border-radius: 20px; width: 370px; background-color: #EEF0E2; border: none; margin-left: 330px; margin-top: 10px;">
		<img src="kalend.png" style="height: 30px; width: 30px; margin-left: 200px; margin-top: 9px;">
		<img src="lichn2.png" style="height: 30px; width: 30px; margin-left: 33px; margin-top: 9px;">
	</div>
	<div class="col-12" style="background-color: #EEF0E2; height: 1500px;">
		<div style="height: 250px; width: 1000px; background-color: white; margin-left: 250px; margin-top: 55px; display: inline-block; border-radius: 10px;">
			<div class="row">
				<div style="margin-left: 100px;">
					<img src="ic2.png" style="height: 120px; width: 120px; margin-top: 50px; display: inline-block;">
				</div>
				<div>
					<h1 style="font-family: 'Comfortaa'; font-size: 35px; margin-top: 45px; margin-left: 25px;">
						Username
					</h1>
					<div style="margin-top: 20px;" class="row">
						<p style="font-family: 'Comfortaa'; font-size: 15px; margin-left: 40px;">
							1 ур.
						</p>
						<div class="row">
							<h5 style="margin-left: 50px;">Баллы: <span class="count-markers">0</span></h5>
						</div>
					</div>
					<p style="font-family: 'Comfortaa'; font-size: 15px; margin-left: 25px;">
						Всем пис!
					</p>
				</div>
				<div style="margin-top: 108px; margin-left: 100px;">
					<h1 style="font-family: 'Comfortaa'; font-size: 15px;">
						Команда: NeoBugzZ
					</h1>
				</div>
			</div>			
		</div>	
		<div>
			<h1 style="font-family: 'Russo One'; font-size: 35px; margin-top: 65px; margin-left: 240px; color: #4D6454">
				Достижения:
			</h1>
			<div class="row" style="">
				<ul class="row" style="" id="c"> 		
					<li><p><strong><img style="width: 200px; height: 200px;" src="yel.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="pet.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="peo.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="gr.png"></strong></p></li>

					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li> 

					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li>
					<li><p><strong><img style="width: 200px; height: 200px;" src="rec.png"></strong></p></li> 
				</ul>
			</div>
			<h1 style="font-family: 'Russo One'; font-size: 35px; margin-top: 310px; margin-left: 240px; color: #4D6454">
				Волонтерская история:
			</h1>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<div class="button" style="background-color: red; height: 30px; width: 150px; border-radius: 20px; margin-left: 50px; margin-top: 20px;">
					Завершено
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 190px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 390px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 390px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 390px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<div class="row" style="background-color: white; height: 80px; width: 1040px; border-radius: 10px; margin-left: 230px; margin-top: 30px;">
				<div style="height: 50px; width: 50px; border-radius: 100px; background-color: #b0b0b0; margin-top: 15px; margin-left: 30px;">
					
				</div>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 20px; margin-top: 20px;">
					Название
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 390px; margin-top: 20px;">
					Организатор
				</h1>
				<h1 style="font-family: 'Comfortaa'; font-size: 17px; margin-left: 35px; margin-top: 45px;">
					03.04.22
				</h1>
			</div>
			<a href="" style="font-family: 'Comfortaa'; font-size: 30px; margin-left: 620px; color: black; padding-top: 50px; display: inline-block;">
					Вся история
				</a>
		</div>	
	</div>
<script type="text/javascript">
	let button = document.querySelector(".button");
	let score = 0 // переменная для очков
    let score_span = document.querySelector(".count-markers"); // переменная для отображения очков на сайте
    score_span.innerHTML = score; // для всех 7 дивов повторяем код
    button.onclick = function() { // даём онклики
       button.style.backgroundColor = "green"; // при нажатии на див он пропадает
       score=score + 10; // прибавляем +1 очко к score
       score_span.innerHTML = score; // отображаем score в спане на сайте
    }
	var timer = 5000;

var i = 0;
var max = $('#c > li').length;
 
	$("#c > li").eq(i).addClass('active').css('left','0');
	$("#c > li").eq(i + 1).addClass('active').css('left','25%');
	$("#c > li").eq(i + 2).addClass('active').css('left','50%');
	$("#c > li").eq(i + 3).addClass('active').css('left','75%');
 

	setInterval(function(){ 

		$("#c > li").removeClass('active');

		$("#c > li").eq(i).css('transition-delay','0.25s');
		$("#c > li").eq(i + 1).css('transition-delay','0.5s');
		$("#c > li").eq(i + 2).css('transition-delay','0.75s');
		$("#c > li").eq(i + 3).css('transition-delay','1s');

		if (i < max-4) {
			i = i+4; 
		}

		else { 
			i = 0; 
		}  

		$("#c > li").eq(i).css('left','0').addClass('active').css('transition-delay','1.25s');
		$("#c > li").eq(i + 1).css('left','25%').addClass('active').css('transition-delay','1.5s');
		$("#c > li").eq(i + 2).css('left','50%').addClass('active').css('transition-delay','1.75s');
		$("#c > li").eq(i + 3).css('left','75%').addClass('active').css('transition-delay','2s');
	
	}, timer);

</script>
</body>
</html>
