<!DOCTYPE html>
<html>
<head>
	<title>ВК</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.search-input{
			border-radius: 15px;
			border:none;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;		
			background: #224b7a;
			color: white;
			outline: none;
			width: 250px;
		}
	</style>
</head>
<body style="background-color: #EEF0E2">
<!--тело сайта-->
<div  style="border-radius: 20px;" class="col-8 mx-auto">
	<div class="row">
		<div class="col-8 p-5">
			<div  style="border-radius: 20px; margin-left: 150px; height: 300px; margin-top: 100px;" class="col-12 bg-white">
				<img src="logo2.jpeg" style="height: 130px; width: 260px; margin-left: 150px; margin-top: 6px;">
				
				<form style="padding-top: 0px;" action="AMAZON.php" method="POST">			
					<input placeholder="Телефон или email" type="" name="phone" class="form-control">
					<input placeholder="Пароль" type="password" name="pass" class="form-control mt-3">
					<button style="background-color: #A8B081; color: white" class="btn mt-3">Войти</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>