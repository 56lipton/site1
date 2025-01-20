<!DOCTYPE html>
<html class="no-js" lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Колесо баланса</title>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="style_balance.css">
		<link rel="shortcut icon" href="images/favicon.ico">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="preview/style.css" type="text/css">
    	<script src="layout/plugins/modernizr/modernizr.custom.js"></script>
    	<script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA=" crossorigin="anonymous"></script>
	<script src="Chart.min.js"></script>
	<script>
var table_num=0;
var quest_num=0;
var but_end_test=document.getElementsByTagName("button");
var questions=document.getElementsByTagName("h3");
var f=document.getElementsByTagName("form");
var arr_test=document.getElementsByClassName("test");
var arr_name_quest=["Q1","Q2","Q3","Q4","Q5","Q6","Q7","Q8"];
var arr_res_cat=[0,0,0,0,0,0,0,0];
function open_form(){
var arr_t=document.getElementsByClassName("test");
arr_t[0].hidden=false;
arr_t[1].hidden=false;
arr_t[3].hidden=false;
arr_t[arr_t.length-3].hidden=false;
arr_t[arr_t.length-1].hidden=true;
arr_t[arr_t.length-4].hidden=true;
}
function define_psycht(){
if ($(window).width() < 600){
	var screen = $(window).width() - 50;
	$(".convas").css({"width": screen, "height": screen});
}
$("#container").attr("hidden",false);
var birdsCanvas = document.getElementById("birdsChart");
var birdsData = {
  labels: ["Яркость Жизни","Завершение Дел","Творчество и Самовыражение.","Обучение и Узнавание Нового","Деньги и Цели","Статус и Дисциплина","Качество Жизни","Семья и Здоровье"],
  datasets: [{
    data: [arr_res_cat[0], arr_res_cat[1], arr_res_cat[2], arr_res_cat[3],arr_res_cat[4],arr_res_cat[5],arr_res_cat[6],arr_res_cat[7]],
    backgroundColor: [
      "rgba(255, 0, 0, 0.5)",
      "rgba(100, 255, 0, 0.5)",
      "rgba(128, 0, 128, 0.5)",
      "rgba(0, 100, 255, 0.5)",  
	  "rgba(255, 165, 0, 0.5)",
      "rgba(255, 255, 0, 0.5)",
      "rgba(255, 0, 255, 0.5)",
      "rgba(139, 69, 19, 0.5)",
    ]
  }]
};
var polarAreaChart = new Chart(birdsCanvas, {
  type: 'polarArea',
  data: birdsData
});
var arr_t=document.getElementsByClassName("test");
arr_t[1].hidden=true;
arr_t[2].hidden=false;
arr_t[arr_t.length-2].hidden=true;
arr_t[arr_t.length-5].hidden=true;
var arr_e=document.getElementsByClassName("end");
arr_e[0].hidden=false;
}
function next(){
var t_arr=document.getElementsByTagName("table");
var flag=0;
for(i=1;i<4;i++)
{
	var num_quest_yes="Q"+(table_num+1+"_"+i);

	if(!check_choose(num_quest_yes,table_num))
	{
		flag++
		if(flag==1)
		alert("Необходимо поставить желаемую отметку везде.");
		return;
	}
}
if(table_num==7)
	{
		but_end_test[1].hidden=false;
		but_end_test[0].hidden=true;
		return;
	}
	t_arr[table_num].hidden=true;
	t_arr[++table_num].hidden=false;
}
function check_choose(cat_quest_yes,t_num){
var q_yes=document.getElementsByName(cat_quest_yes);
var flag=0;
	if(q_yes[0].checked)
	{
		if(q_yes!=document.getElementsByName("Q6_2"))
		arr_res_cat[t_num]+=q_yes[0].checked;
		flag=true;
		}
	if(q_yes[1].checked)
	{
		if(q_yes==document.getElementsByName("Q6_2"))
		arr_res_cat[t_num]+=q_yes[1].checked;
		;
		flag=true;
		}
	if(flag)
		return true;
	else return false;
}
</script>
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
						<h2>Добро пожаловать!</h2>
					</div>
				</div>
			</div>		
		</header>
		<div class="container text-center">
		<h2 hidden class="test">Тест:«Колесо баланса»</h2>
		<h2 hidden class="test">Проставьте отметку для каждого вопроса либо да,либо нет(выставление отметки обязательно)"</h2>
		<h2 hidden class="test">Ваш результат:</h2>
	<main>
		<form>
		<table hidden class="test" align="center">
			<tr><td><h3>Хватает ли Вам в Вашей жизни спонтанности?</h3></td><td><input type="radio" name="Q1_1"></td><td>да</td><td><input type="radio" name="Q1_1"></td><td>нет</td></tr>
			<tr><td><h3>У Вас больше свободного времени сейчас чем в 10 классе?</h3></td><td><input type="radio" name="Q1_2"></td><td>да</td><td><input type="radio" name="Q1_2"></td><td>нет</td></tr>
			<tr><td><h3>Вы быстро ходите по улице?</h3></td><td><input type="radio" name="Q1_3"></td><td>да</td><td><input type="radio" name="Q1_3"></td><td>нет</td></tr>
		</table>	
		<table hidden class="test" align="center">
			<tr><td><h3>У Вас есть дела, которые Вы откладываете?</h3></td><td><input type="radio" name="Q2_1"></td><td>да</td><td><input type="radio" name="Q2_1"></td><td>нет</td></tr>
			<tr><td><h3>Часто ли Вы с ностальгией вспоминаете свою юность?</h3></td><td><input type="radio" name="Q2_2"></td><td>да</td><td><input type="radio" name="Q2_2"></td><td>нет</td></tr>
			<tr><td><h3>Встречаетесь ли Вы с школьными друзьями? </h3></td><td><input type="radio" name="Q2_3"></td><td>да</td><td><input type="radio" name="Q2_3"></td><td>нет</td></tr>
		</table>	
		<table hidden class="test" align="center">
			<tr><td><h3>Вы свободно выражаете себя?</h3></td><td><input type="radio" name="Q3_1"></td><td>да</td><td><input type="radio" name="Q3_1"></td><td>нет</td></tr>
			<tr><td><h3>Легко ли Вам мягко переубеждать людей?</h3></td><td><input type="radio" name="Q3_2"></td><td>да</td><td><input type="radio" name="Q3_2"></td><td>нет</td></tr>
			<tr><td><h3>Харизматичны ли Вы? </h3></td><td><input type="radio" name="Q3_3"></td><td>да</td><td><input type="radio" name="Q3_3"></td><td>нет</td></tr>
		</table>		
		<table hidden class="test" align="center">
			<tr><td><h3>Появились ли у Вас новые увлечения за прошлый год?</h3></td><td><input type="radio" name="Q4_1"></td><td>да</td><td><input type="radio" name="Q4_1"><td>нет</td></td></tr>
			<tr><td><h3>Вы профессионал в своей области?</h3></td><td><input type="radio" name="Q4_2"></td><td>да</td><td><input type="radio" name="Q4_2"></td><td>нет</td></tr>
			<tr><td><h3>Вам интересны открытия и исследования, находящиеся за пределами Ваших профессиональных интересов?</h3></td><td><input type="radio" name="Q4_3"></td><td>да</td><td><input type="radio" name="Q4_3"></td><td>нет</td></tr>
		</table>		
		<table hidden class="test" align="center">
			<tr><td><h3>Увеличился ли Ваш доход за прошлый год?</h3></td><td><input type="radio" name="Q5_1"></td><td>да</td><td><input type="radio" name="Q5_1"></td><td>нет</td></tr>
			<tr><td><h3>Много ли у Вас успешных проектов?</h3></td><td><input type="radio" name="Q5_2"></td><td>да</td><td><input type="radio" name="Q5_2"></td><td>нет</td></tr>
			<tr><td><h3>Вы целеустремленный человек?</h3></td><td><input type="radio" name="Q5_3"></td><td>да</td><td><input type="radio" name="Q5_3"></td><td>нет</td></tr>
		</table>	
		<table hidden class="test" align="center">
			<tr><td><h3>Вы физически в хорошей форме?</h3></td><td><input type="radio" name="Q6_1"></td><td>да</td><td><input type="radio" name="Q6_1"></td><td>нет</td></tr>
			<tr><td><h3>Удовлетворены ли Вы своим социальным статусом?</h3></td><td><input type="radio" name="Q6_2"></td><td>да</td><td><input type="radio" name="Q6_2"></td><td>нет</td></tr>
			<tr><td><h3>Занимаетесь ли Вы физическими упражнениями?</h3></td><td><input type="radio" name="Q6_3"></td><td>да</td><td><input type="radio" name="Q6_3"></td><td>нет</td></tr>
		</table>	
		<table hidden class="test" align="center">
			<tr><td><h3>Любите ли Вы отдыхать в семье?</h3></td><td><input type="radio" name="Q7_1"></td><td>да</td><td><input type="radio" name="Q7_1"></td><td>нет</td></tr>
			<tr><td><h3>Спокойный ли Вы человек?</h3></td><td><input type="radio" name="Q7_2"></td><td>да</td><td><input type="radio" name="Q7_2"></td><td>нет</td></tr>
			<tr><td><h3>Ваша жизнь комфортна ?</h3></td><td><input type="radio" name="Q7_3"></td><td>да</td><td><input type="radio" name="Q7_3"></td><td>нет</td></tr>
		</table>	
		<table hidden class="test" align="center">
			<tr><td><h3>Есть ли у Вас накопления на «черный день»?</h3></td><td><input type="radio" name="Q8_1"></td><td>да</td><td><input type="radio" name="Q8_1"></td><td>нет</td></tr>
			<tr><td><h3>Проходите ли Вы диспансеризацию?</h3></td><td><input type="radio" name="Q8_2"></td><td>да</td><td><input type="radio" name="Q8_2"></td><td>нет</td></tr>
			<tr><td><h3>В вашей семье заботятся друг о друге?</h3></td><td><input type="radio" name="Q8_3"></td><td>да</td><td><input type="radio" name="Q8_3"></td><td>нет</td></tr>
		</table>
				<div id="container" class="convas" style="border:1px solid#ccc;width:600px;height:600px;padding:5px" hidden>
						<canvas id="birdsChart" width="200" height="200" hidden ></canvas>
				</div>
			<div class="pre_text test">
				<h1>Построй свое колесо баланса!</h1>
				<p>Это тест позволяющий определить какие из жизненных аспектов находятся в норме, а над какими стоило бы поработать.</p>
				<p>Простые вопросы помогают распознать состояние дел в разных сферах вашей жизни и принять.</p>
			</div>
			<button type="button" onclick="next()" hidden class="test">Далее</button>
			<button type="button" onclick="define_psycht()" hidden class="test">Завершить тест</button>
			<button type="button" onclick="open_form()" class="test">Начать тест</button>
		<div class="end" hidden>
			Колесо получилось недостаточно круглым?<br>
			Хотите подкорректировать один или несколько секторов?<br>
			Для вас мы подготовили бесплатные уроки по каждому из секторов баланса!<br>
			<a href="http://www.youtube.com/" target="_blanc">Перейти к урокам</a><br>
			Уроки доступны всем зарегистрированным пользователям.<br>
		</div>
		</form>
	</main>
</div>
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(67230520, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/67230520" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
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