<!DOCTYPE html>
<html class="no-js" lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Регистрация</title>
		<link rel="shortcut icon" href="images/favicon.ico">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="preview/style.css" type="text/css">
    	<script src="layout/plugins/modernizr/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="page-loader">
			<div class="progress">Загрузка...</div>
		</div>	
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
						<h1>
							<img src="images/logo.png" width="196" height="202" />
						</h1>
						<h2>Авторизация и регистрация</h2>
					</div>
				</div>
			</div>		
		</header>
		<section class="demo">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-lg-12 text-intro">
						<h2>Вход:</h2><br>
						<form method="POST" action="vh.php">
							<input type="emeil" name="log" placeholder="Введите почту"></input><br>
						<br>
						<input type="text" name="par" placeholder="Введите пароль"></input>
						<h3><input type="submit" name="otpr"><h3>
						</form>
							<h2>Регистрация:</h2><br>
							<form method="POST" action="reg.php">
						<input type="emeil" name="login" placeholder="Введите почту"></input><br>
						<br>
						<input type="text" name="parol" placeholder="Введите пароль"></input><br>
						<br>
						<input type="text" name="imya" placeholder="Введите никнейм">
						<h3><input type="submit" name="otpr"><h3>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="item col-xs-12 col-sm-4 col-lg-4">
					</div>
					<div class="item col-xs-12 col-sm-4 col-lg-4">
					</div>
					<div class="item col-xs-12 col-sm-4 col-lg-4">
					</div>
				</div>
			</div>		
		</section>
		<footer id="footer">
			<span class="copyright">Нижнекамск © 2023
				<span class="social">
					<a href="http://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                   	<a href="http://plus.google.com/" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
					<a href="http://www.youtube.com/" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
				</span>
			</span>
		</footer>
	</body>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="preview/js/main.js"></script>
</html>