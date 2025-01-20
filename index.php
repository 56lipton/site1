<!DOCTYPE html>
<html lang="en-RU">
  	<head>
	  	<meta charset="utf-8">
      	<title>8 сфер жизни</title>
		<link rel="shortcut icon" href="images/favicon.png">
      	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"/>
      	<link rel="stylesheet" type="text/css" href="layout/style.css">
		<link rel="stylesheet" type="text/css" href="layout/media.css">
		<link class="colors" rel="stylesheet" href="layout/colors/orange.css" type="text/css">
    	<link rel="stylesheet" href="layout/plugins/cssanimation/animate.css" type="text/css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="layout/plugins/settings/settings.css" type="text/css">
	</head>
  	<body>
		<div class="page-loader">
			<div class="progress">Загрузка...</div>
		</div>
  		<div id="BackgroundVideo" class="player" 
     		data-property="{videoURL:'https://youtu.be/tXxHxX7PKf8', containment:'header', autoPlay:true, showControls:false, mute:false, startAt:0, opacity:1, showYTLogo:false, vol:25}">
      	</div>
		<header id="#top">
    		<div class="logo">
				<img src="images/logo.png" width="196" height="202"/> 
			</div>
    		<h1>8 сфер жизни</h1>
			<p>Для самореализации и личностного роста часто применяется
				техника «Колесо жизненного баланса, 8 сфер»,<br/>
				которая позволяет увидеть свою жизнь немного со стороны, отвлеченно, узнать, насколько вы удовлетворены каждой её областью.
			</p>
         	<div class="countdown"></div>
         	<div class="mouse">
         		<a  href="#services">
         			<i class="fa fa-chevron-down"></i>
         		</a>
         	</div>
         	<div class="player-controls">
            	<a id="play" class="fa fa-play" href="#"></a>
            	<a id="pause" class="fa fa-pause" href="#"></a>
          	</div>
          </header>
		<section class="services" id="services">
		  	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4" data-sr="wait 0.25s, then enter left and move 40px over 1s">
							<div class="icon">
								<form action="inf.php">
								<center><button style="background-color: rgba(28,28,28,0); border: 0;"><i class="fa fa-laptop fa-fw"></i></button></center>
								</form>
							</div>
							<h2>Информация для ознакомления со сферами жизни</h2>
							<p>Интерпретация методики исходит из названия «колесо баланса» – в развитии сфер жизни личности не должно быть дисгармонии. Рассмотрим подробнее колесо жизненного баланса, что это, и как его составить.</p>
						</div> 
						<div class="col-md-4" data-sr="wait 0.25s, then enter top and move 40px over 1s">
							<div class="icon">
								<form action="regvh.php">
								<center><button style="background-color: rgba(28,28,28,0); border: 0;"><i class="fa fa-code fa-fw"></i></button></center></form>
							</div>
							<h2>Регистрация и вход</h2>
							<p>Ваши данные будут под нашей защитой. Это нужно лишь для того, чтобы мы смогли связать Ваш аккаунт с Вашими результатами.
							</p>
						</div> 
						<div class="col-md-4" data-sr="wait 0.25s, then enter right and move 40px over 1s">
							<div class="icon">
								<i class="fa fa-bullhorn fa-fw"></i>
							</div>
							<h2>24/7 помощь по сайту</h2>
							<p>Счастье пользователей, клиентов и партнёров всегда на первом месте для нас. Важно, чтобы мы отвечали на вопросы клиентов ровно в тот момент, когда им это нужно, а не только в рабочее время. С круглосуточным сервисом сделать это станет проще</p>
						</div> 
					</div>
			   </div>
			</div>
		</section>
		<section class="subscribe">
			<div class="container">
				<div class="row">
					<h2>
						<i class="fa fa-paper-plane"></i>Подписка на нашу рассылку
					</h2>
					<form id="ajaxChimp">
						<input id="mc-email" type="text" placeholder="Введите свою электронную почту">
						<button type="submit">Подписаться</button>
						<label for="mc-email"></label>
					</form>
			 	</div>
		  	</div>
		</section>
		<section class="contact">
  			<div class="container">
				<div class="row">
					<h2 data-sr="wait 0.5s, then enter top and move 40px over 1s">
						<span>Отправить свои пожелания</span>
					</h2>
				  	<div class="col-md-12">
				  		<div id="note"></div>
						<div id="fields">
							<form id="ajax-contact-form">
						  		<input type="text" name="name" id="name" placeholder="Имя" value=""/>
						  		<input type="email" name="email" id="email" placeholder="Почта" value="" />
						  		<textarea name="message" id="message" placeholder="Сообщение"></textarea>
						  		<input type="submit" name="submit" id="submit" value="Отправить"/>
							</form>
					 	</div>						
				  	</div>
			 	</div>
			</div>
		</section>
		<section class="map" style="height: 500px;width: 1500px"><h2 style="text-align: right;font-family: Open Sans;position: relative;top: 40px;">Где же нас найти?<br>Вот и ответ на вопрос:<br><img src="images/arrows.png" width="200" height="200"></h2>
			<div id="yandex">
			<div style="position:relative;overflow:hidden;position: relative;top: -290px;right: 200px"><a href="https://yandex.ru/maps/org/nizhnekamskiy_politekhnicheskiy_kolledzh_imeni_ye_n_koroleva/1201131540/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Нижнекамский политехнический колледж имени Е. Н. Королева</a><a href="https://yandex.ru/maps/11127/nizhnekamsk/category/college/184106236/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Колледж в Нижнекамске</a>
				<iframe src="https://yandex.ru/map-widget/v1/?ll=51.799231%2C55.628846&mode=search&oid=1201131540&ol=biz&z=16.9" width="1300" height="500" frameborder="1" allowfullscreen="true" style="position:relative;">
				</iframe>
			</div>
		</div>
		</section>
		<footer>
		  	<div class="container">
			 	<div class="row">
					<a  href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
					<ul class="copyright" data-sr="wait 0.5s, then enter left and move 40px over 1s">
				 		Нижнекамск © 2023 <a href="#" target="_blank">8СЖ</a>
					</ul>
			   		<div class="social-icon" data-sr="wait 0.5s, then enter right and move 40px over 1s">
						<li><a ><i class="fa fa-fw fa-youtube"></i></a></li>
				 		<li><a><i class="fa fa-fw fa-twitter"></i></a></li>
				 		<li><a><i class="fa fa-fw fa-facebook"></i></a></li>
				 		<li><a><i class="fa fa-fw fa-dribbble"></i></a></li>
				 		<li><a><i class="fa fa-fw fa-google-plus"></i></a></li>
					</div>
			 	</div>
		  	</div>
		</footer>
	</body>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.js"></script>
	<script src="layout/plugins/backstretch/jquery.backstretch.min.js"></script>
	<script src="layout/plugins/countdown/jquery.countdown.min.js"></script>
	<script src="layout/plugins/validate/jquery.validate.min.js"></script>
	<script src="layout/plugins/scrollreveal/scrollreveal.js"></script>
	<script src="layout/plugins/ytplayer/jquery.mb.ytplayer.js"></script>
	<script src="layout/plugins/smoothscroll/smoothscroll.js"></script>
	<script src="layout/plugins/ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACD4glC7QueG1h3FuoNbDWL28vjrnNjKo"></script>
	<script src="layout/js/main.js"></script>
	<script type="text/javascript" src="layout/plugins/settings/jquery.cookies.min.js"></script>
	<script type="text/javascript" src="layout/plugins/settings/settings.js"></script>
</html>