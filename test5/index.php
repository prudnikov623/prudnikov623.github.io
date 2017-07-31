<?php include 'data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>«PowerBank» солнечное зарядное устройство 12000mAh</title>

	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="alternate" href="libs/html5shiv/html5shiv.min.js">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<a href="#"><img src="img/logo.png" alt="logo"></a>
			</div>
			<a href="#formScroll">
				<div class="header_btn">Заказать звонок</div>
			</a>
		</div>
	</header>
	<section class="promo">
		<div class="container">
			<div >ВНЕШНИЙ АККУМУЛЯТОР</div>
			<div >НА СОЛНЕЧНОЙ БАТАРЕЕ</div>
			<div >C УДАРОПРОЧНЫМ</div>
			<div >И ВЛАГОУСТОЙЧИВЫМ КОРПУСОМ</div>
			<div >ЗАРЯЖАЙТЕ МОБИЛЬНЫЕ УСТРОЙСТВА</div>
			<div >В ЛЮБУЮ ПОГОДУ ПРИ ЛЮБЫХ УСЛОВИЯХ!</div>
		</div>
	</section>

	<section class="action_block">
		<div class="container clearfix" >
			<div class="eTimer"></div>

			<form action="post.php" method = "post" >
				<h1>POWER BANK!</h1>
				<p><?php echo $old_price; ?> руб.</p>
				<p><?php echo $price; ?> руб.</p>
				<p class="sale">закажи сейчас со скидкой 50%!</p>

				<input type="text" name = "name" placeholder = "Введите Ф.И.О" required>
				<input type="text" name = "phone" placeholder = "Введите телефон" required>
				<input type="submit" value = "Заказать">
			</form>		
		</div>
	</section>

	<section class="description_block">
		<div class="container">
			<p class="item1">Ударопрочный влагоустойчивый <br>корпус</p>
			<p class="item2">Зарядка<br> 2-х устройств одновременно</p>
			<p class="item3">Заряжает<br> любые USB <br>устройства</p>
			<p class="item4">Заряжается как<br> от солнца так<br> и от сети</p>
			<p class="item5">Емкость аккумулятора<br> 12 000 mA*h</p>
		</div>
		<a href="#formScroll">
			<div class="desc_btn">ОПЯТЬ НЕ ВОВРЕМЯ РАЗРЯДИЛСЯ ТЕЛЕФОН? ЗАКАЖИТЕ POWER BANK! </div>
		</a>
	</section>

	<section class="fishing">
		<div class="container">
			<h1>ТЕБЕ НУЖЕН POWER BANK! <br> ЕСЛИ ТЫ РЫБОЛОВ ИЛИ ОХОТНИК</h1>
		</div>
	</section>

	<section class="problem">
		<div class="container">
			<div class="content_wrapper">
				<h3>Телефон подвел в неподходящий момент?</h3>
				<p>Портативное зарядное устройство станет находкой для владельцев смартфонов и цифровых фото- и видеокамер. Устройство сможет подарить любимому девайсу несколько часов полноценной функциональности, что достигается встроенным в него микроконтроллером, который эффективно распределяет расходование энергии. Если зарядное устройство не использовать, то оно автоматически выключается.</p>
			</div>
			<img src="img/iphone-p.png" alt="Айфон">
		</div>
	</section>	
	
	<section class="travel">
		<div class="container">
			<h3>POWER BANK НЕ ЗАМЕНИМ <br> В ПОХОДЕ И ПУТЕШЕСТВИИ</h3>
		</div>
	</section>

	<section class="guaranty ">
		<div class="container clearfix">
			<h1><b>ПОЧЕМУ ДОВЕРЯЮТ</b> <br> ИМЕННО НАМ?</h1>
			<img src="img/partners.jpg" alt="Guaranty">
		</div>
	</section>
	
	<section class="work">
		<div class="container">
			<h1>КАК МЫ РАБОТАЕМ?</h1>
			<p class="item1">Вы оставляете <br> заявку на сайте</p>
			<a href="#formScroll">
				<div class="work_btn">Оставить заявку</div>
			</a>
			<p class="item2">Наш специалист связывается с вами</p>
			<p class="item3">Подтверждаете заказ и уточняете детали</p>
			<p class="item4">Ваша покупка доставляется в почтовое отделение</p>
			<p class="item5">Оплачиваете <br> посылку при <br> получении на почте</p>
		</div>
	</section>

	<section class="comments">
		<div class="container">
			<h1>ОТЗЫВЫ НАШИХ ПОКУПАТЕЛЕЙ</h1>
			<div class="comment clearfix">
				<img src="img/user.png" alt="photo">
				<div class="comment_content">
					<p class="title">Олег Фролов</p>
					<p class="text">Доставка супер быстрая 5 дней! Менеджер сообщил трек-номер для отслеживания заказа. Все работает, приехал заряженный, зарядил телефон с 0% за 2 часа и потухла только 1 лампочка. Заряжается от солнца. Фонарик яркий! Вещь нужная, порекомендую друзьям!</p>
				</div>
			</div>
			<div class="comment clearfix">
				<img src="img/user1.png" alt="photo">
				<div class="comment_content">
					<p class="title">Юлия Демидова</p>
					<p class="text">Аккумулятор хороший, дошел за 7 дней. Очень быстро заряжает камеру, теперь я не боюсь что она разрядится в самый неподходящий момент! Хорошо, что влагозащищен))) Как заряжает от солнца пока не проверяла.)</p>
				</div>
			</div>
			<div class="comment clearfix" >
				<img src="img/user2.png" alt="photo">
				<div class="comment_content">
					<p class="title">Мария Шварц</p>
					<p class="text">Заказала в подарок! Мой папа заядлый турист, он просто живет этим. Аккумулятор оказался как раз кстати. Теперь он всегда может зарядить телефон и выйти на связь. Спасибо Вам, за классный гаджет и быструю доставку!</p>
				</div>
			</div>
			<div class="comment clearfix">
				<img src="img/user5.png" alt="photo">
				<div class="comment_content">
					<p class="title">Артем Хван</p>
					<p class="text">Заказал повер банк, пришел за 5 дней. В общем доволен. Упакован был хорошо, качеством доволен. Но от солнца заряжает медленнее, чем от сети. Порадовал фонарик, на удивление светит очень ярко. Спасибо вашему магазину за быструю доставку!</p>
				</div>
			</div>
		</div>
	</section>

	<section id="formScroll" class="form_block">
		<div class="container">

			<div class="eTimer1"></div>

			<h1>УСПЕЙ<span>ЗАКАЗАТЬ СО СКИДКОЙ</span></h1>
			<form action="post.php" method = "post" >
			<h1>POWER BANK!</h1>
			<p><?php echo $old_price ?>  руб.</p>
			<p><?php echo $price ?>  руб.</p>
			<p class="sale">закажи сейчас со скидкой 50%!</p>

			<input type="text" name = "name" placeholder = "Введите Ф.И.О" required>
			<input type="text" name = "phone" placeholder = "Введите телефон" required>
			<input type="submit" value = "Заказать">
		</form>	
		</div>	
	</section>

	<footer>
		<div class="container">
			<p>Если остались вопросы звоните. <?php echo $phone ?>  <br> <a href="#">Политика конфиденциальности</a></p>
		</div>
	</footer>

	<script src = "libs/jquery/jquery-3.2.1.min.js"></script>
	<script src="http://e-timer.ru/js/etimer.js"></script>
	<script src = "js/timer.js"></script>
	<script src = "js/common.js"></script>
</body>
</html>