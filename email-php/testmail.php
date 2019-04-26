<?php
session_start();
if($_SESSION['gencode'] == ''){
	$_SESSION['gencode'] = rand(1000, 9999); 
}
if(isset($_POST['submit'])){
	extract($_POST);
	if(!empty($from) && !empty($to) && !empty($message) && !empty($subject) && $code == $_SESSION['gencode']){
		if(mail($to, $subject, $message, "From:" . $from)){
			echo '<div class="alert">
			<p class="center">Письмо успешно отправлено</p> </div>';
			$_SESSION['gencode'] = rand(1000, 9999); 
		} else { 
			echo "<div class='alert'>
			<p class='center'>Не удалось отправить письмо: </p> 
			<p class='center'>Проверьте включена ли функция PHPMail - <a href='http://faq.cityhost.ua/?p=faq_new&faq_id=172'>ссылка</a></p> </div>";
			$_SESSION['gencode'] = rand(1000, 9999); 
		}
	} else {
		echo '<div class="alert">
			<p class="center">Проверьте правильность заполнения формы!</p> </div>';
			$_SESSION['gencode'] = rand(1000, 9999); 
	}
}
?>
<style>
* { padding: 0 2%; margin: 0px; }
div { text-align: center; float: left; }

div.right { border-left: 2px gray; font-weight: bold; width: 50%; text-align: left; border: 4px dotted;}
p.center { text-align: center; font-size: 1.5em;  font-weight: bold; }
p.left { text-align: left; font-weight: bold; }
input, label { text-align: left; font-size: 1.5em; display: block; }
div.alert { padding: 0px; background-color: #f44336; color: white; opacity: 1; transition: opacity 0.6s; margin-bottom: 15px; width: 100%;}
li { border-bottom: 2px dotted gray; }
a:link, a:visited, a:active { color: blue; }
input[type="submit"] { margin-top: 20px; }
body{ background-image: url(https://cityhost.ua/imgs/stub/stub_images/backimg.jpeg); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100vm; height: 100vh; }
div.tranc{ background: rgba(255, 255, 255, 0.75) none repeat scroll 0 0; display: inline-block; margin-bottom: 20px; margin-top: 20px; padding: 20px }
@media (max-width: 1098px) { div, div.right { width: 100%; } }
</style>

<html>
	<head>
		<title>Mail() Test script</title>
	</head>
	<body>
	<div class="tranc">
		<p class="center">Скрипт проверки функции Mail() для PHP</p><br> <br>
		<div> 
			<form method="POST">
				<p class="left">Почтовый ящик отправителя:</p>
				<input type='email' name='from' id="from">
				
				<p class="left">Почтовый ящик получателя:</p>
				<input type='email' name='to' id="to">
				
				<p class="left">Тема письма:</p>
				<input type='text' name='subject' id="subject">
				
				<p class="left">Ваше сообщение:</p>
				<input type='text' name='message' id="message">
				
				<p class="left">Ведите в поле цифры: <?php echo $_SESSION['gencode'] ?></p>
				<input type='number' name='code' id="code">
				<input type='submit' name='submit' value="Тестировать">
			</form>
		</div>
		<div class="right">
		<p class="right " ><center>^_^ Рекомендации ^_^</center></p>
		<ul>
			<li>Почтовый ящик отправителя письма должен быть физически создан на сервере - о том как создать ящик описано в -<a href="http://faq.cityhost.ua/?p=faq_new&faq_id=63">инструкции</a></li>
			<li>Подключите политики борьбы со спамом DKIM, DMARC, SPF</li>
			<li>Если письмо не приходит на некоторые почтовые сервисы (например не приходит на mail.ru но на gmail.com - успешно доставляется)  - это означает что оно не прошло СПАМ фильтр этого сервиса и в ближайшее вермя Вы должны будете получить "отбойник" с указанием, по каким именно причинам письмо не было доставлено</li>
		</ul>
		</div>
		</div>
		<div class="tranc">
		© CityHost.ua 2016-<?php echo date('Y'); ?>.
		</div>
	</body>
</html>

