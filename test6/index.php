<?php include 'data.php' ?>

<!DOCTYPE html>
<html lang="ru">


<head>
	<meta charset="UTF-8">
	<title>Продажа многофункционального зеркала заднего вида HD Recorder</title>
	<meta viewport="width=1000px">
	<meta name="viewport" content="width=1000px">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/slick.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />

	<link rel="stylesheet" href="css/main.css">

	<script src="libs/jquery/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="libs/slick/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

	<script src="js/common.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$("a.grouped_elements").fancybox();
		});
	</script>
	
	


			
	</head>
<body>

<div class="screen"></div>

<div class="wrapper">

	<div class="top_line">
		<div class="center">
			<img src="img/logo.png" alt="" class="logo">
			<div class="timework">Прием заявок <br><span>КРУГЛОСУТОЧНО</span></div>
			<div class="delivery">Доставка <br><span>ПО РФ</span></div>
			<div class="right_side">
				<p>Есть вопросы?</p>
				<span><a href="#" class="call_back_href" style="text-decoration: none; color: #000">ЗАКАЖИТЕ ЗВОНОК</a></span>
				<p>Мы перезвоним в течение 15 минут</p>
			</div>
		</div>
	</div>

	<div class="menu_wrap">
		<div class="menu">
			<div class="center">
				<nav>
					<ul>
						<li><a href="#id1">Особенности видеозеркала </a></li>
						<li><a href="#id2">Отзывы</a></li>
						<li><a href="#id3">Характеристики</a></li>
						<li><a href="#id4">Как мы работаем</a></li>
					<li  style="
    /* font-family: 'Roboto-Condensed'; */
    /* font-size: 24px; */
    margin: 5px 20px 0 7px;
    /* display: block; */
    float: right;
    font-size: 32px;
    font-family: 'Roboto Condensed';
	font-weight: bold;
"><?php echo $phone?></li>
					</ul>
				</nav>
				</div>
		</div>
	</div>

	<header>
		<div class="center">
			<h2>ЗЕРКАЛО-ВИДЕОРЕГИСТРАТОР</h2>
			<img src="img/zerkalo.png" width="578" height="217" style="margin-left: 200px; margin-top: 20px">			
			<h1>HD Recorder</h1>
			<ul class="list">
				<li style="margin-right: 20px; width: 300px; background: rgba(69, 68, 66, 0.8); color: #fff; padding: 10px; font-size: 16px">
				ЗЕРКАЛО ЗАДНЕГО ВИДА СО ВСТРОЕННЫМ ВИДЕОРЕГИСТРАТОРОМ И КАМЕРОЙ ЗАДНЕГО ВИДА
				<span style="display: block; padding-top: 10px">Старая цена: <strike><?php echo $old_price?></strike></span>
				<span style="display: block;">Цена по акции: <span style="color: #f4a833; font-size: 30px;"><?php echo $price?></span></span>
				</li>
				<li><img src="img/hi2.png" width="100" height="95">ЭКРАН МОНИТОРА 4,3" ДЮЙМА</li>
				<li><img src="img/hi3.png" width="100" height="95">G-СЕНСОР (ДАТЧИК УДАРА)</li>
				<li><img src="img/hi4.png" width="100" height="95">ШИРОКИЙ УГОЛ ОБЗОРА 140°</li>
				<li><img src="img/hi5.png" width="100" height="95">ДОПОЛНИТЕЛЬНАЯ HD КАМЕРА</li>
			</ul>
		</div>
	</header>

	<div class="vtoroi">
		<div class="center">
			<div class="akcia_block">
				<img src="img/ico4.png" class="akcia_title" alt="">
				<h2><span>Закажите</span> Видеозеркало HD Recorder <span>до конца дня и получите специальную скидку</span> 50%! </h2>
				<div class="akcia_left">
					<img src="img/akcia_img.jpg" alt="" width="300" height="300">
					<p>Видеозеркало HD Recorder</p>
					<div class="price"><span><?php echo $old_price?> рублей.</span><ins><?php echo $price?></ins></div>
				</div>
				<div class="akcia_right">
					<div class="form">
						<div class="form_title">Введите ваш номер телефона, чтобы заказать видеозеркало HD Recorder прямо сейчас:</div>
						<form method="post" action="post.php">
							<div class="element"><input type="text" name="name" placeholder="Ваше ФИО"></div>
							<div class="element"><input type="text" name="phone" id="phone" placeholder="+7" required></div>
							<div class="element"><input type="submit" value="Заказать видеозеркало"></div>
							<p>1. Мы позвоним Вам, чтобы <br>сформировать заказ.</p>
							<p>2. Заявка Вас ни к чему не обязывает. <br>Вы сможете отказаться в любой момент.</p>
							<input type="hidden" name="product" value="ua-hdrecorder">
							<input type="hidden" name="productid" value="931">
							<input type="hidden" name="hash" value="287de002a05e7cd4f646835952a0baea">
							<input type="hidden" name="landing" value="ua-hdrecorder">
							<input type="hidden" name="astt" value="J7ti8rMw7s">
							<input type="hidden" name="astt2" value="0">
							<input type="hidden" name="astsid" value="0">
							
							
							<input type="hidden" name="country" value="UA">
						</form>
					</div>
				</div>
			</div>
			<ul class="icons justi">
				<li>
					<div class="ico"><img src="img/ico6.png" alt=""></div>
					<p>Доставка <br>по всей Украине</p>
				</li>
				<li>
					<div class="ico"><img src="img/ico7.png" alt=""></div>
					<p>Оплата при получении</p>
				</li>
				<li>
					<div class="ico"><img src="img/ico8.png" alt=""></div>
					<p>Гарантия 1 год</p>
				</li>
				<li>
					<div class="ico"><img src="img/ico9.png" alt=""></div>
					<p>Вся продукция <br>сертифицирована</p>
				</li>
			</ul>
		</div>
	</div>

	<div class="osobenosti">
		<div id="id1" style="top:-80px;"></div>
		<div class="center">
			<h2>особенности  видеозеркала HD Recorder</h2>
			<div class="video" style="margin-top: 30px; margin-left: 200px">
				<iframe class="actAsDiv" width="560" height="315" src="https://www.youtube.com/embed/IKsCVna9yvg?autoplay=0&amp;loop=0&amp;showinfo=0&amp;theme=light&amp;color=white&amp;controls=1&amp;modestbranding=0&amp;start=0&amp;fs=0&amp;iv_load_policy=3&amp;wmode=transparent&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>			
			</div>			
			<ul>
				<li>
					<img src="img/img1.jpg" alt="">
					<div class="oso_text">
						<h3>Видеорегистратор в зеркале</h3>
						<p>Главное достоинство  HD Recorder, как видеорегистратора - это качественная фронтальная камера, записывающая в формате Full HD 
						с разрешением 1920*1080. При этом угол обзора составляет 140о. 
						Используется качественная IPS матрица, которая делает картинку 
						яркой, сочной, четкой, а угол обзора экрана настолько широкий, что изображение не искажается с водительского сиденья. </p>
					</div>
				</li>
				<li>
					<img src="img/img2.jpg" alt="">
					<div class="oso_text">
						<h3>Датчик движения</h3>
						<p>Автоматическая запись, во время стоянки, только при наличии движения в плоскости обзора, при отсутствии движения запись не ведется. Увидите, что происходит с машиной в ваше отсутствие.</p>
					</div>
				</li>
				<li>
					<img src="img/img3.jpg" alt="">
					<div class="oso_text">
						<h3>Автоматическая регулировка яркости экрана монитора + функция АНТИблик</h3>
						<p>Автокорректировка яркости (меняется в обусловленности от освещения и времени суток, обеспечивая изображению высокое качество и четкость)</p>
					</div>
				</li>
				<li>
					<img src="img/img4.jpg" alt="">
					<div class="oso_text">
						<h3>Камера заднего вида</h3>
						<p>Удобный обзор заднего вида. Режим картинка в картинке</p>
					</div>
				</li>
				<li>
					<img src="img/img5.jpg" alt="">
					<div class="oso_text">
						<h3>Простое крепление и подключение</h3>
						<p>Регистратор незаметен – это делает его разрешенным по новому законодательству, а также он не будет легкой добычей для воров (т. е. отсутствует необходимость постоянно снимать и прятать устройство)</p>
					</div>
				</li>
				<li>
					<img src="img/img6.jpg" alt="">
					<div class="oso_text">
						<h3>Full HD 1080P</h3>
						<p>Используется новаторская технология передачи видео Full HD Prof (повышенная четкость изображения).</p>
					</div>
				</li>
			</ul>
			<div class="call_back_block">
				<p>Хотите мы подробнее расскажем Вам<br>
				о всех особенностях и преимуществах<br>
				видеозеркала HD Recorder по телефону?</p>
				<div class="form">
					<form method="post" action="post.php">
						<div class="element"><input type="text" name="name" placeholder="Ваше ФИО"></div>
						<div class="element"><input type="text" name="phone" required id="phone" placeholder="+7"></div>
						<div class="element"><input type="submit" value="Да, позвоните мне"></div>
						<input type="hidden" name="product" value="ua-hdrecorder">
						<input type="hidden" name="productid" value="931">
						<input type="hidden" name="hash" value="287de002a05e7cd4f646835952a0baea">
						<input type="hidden" name="landing" value="ua-hdrecorder">
						<input type="hidden" name="astt" value="J7ti8rMw7s">
						<input type="hidden" name="astt2" value="0">
						<input type="hidden" name="astsid" value="0">
						<input type="hidden" name="partner" value="Юрий1 (267)">
						
						<input type="hidden" name="country" value="UA">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="otzivi">
		<div id="id2" style="top:-80px;"></div>
		<div class="center">
			<h2>Отзывы о видеозеркалe HD Recorder</h2>
			<div class="otzivi_carousel">
				<div>
					<div class="o_imgs">
						<img src="img/o1.jpg" class="otziv_photo" alt="">
						<img src="img/o11.jpg" class="otziv_tovar" alt="">
						<p>Константин</p>
						<p><span>г. Днепропетровск</span></p>
					</div>
					<div class="o_text">
						<p>Опять долгие ночи в интернете в поисках обзоров и сравнений… Проблема таких устройств что у них либо дизайн уродский огромный — в полтора раза больше штатного, а я вообще не люблю заднее зеркало, так как за 3 года вождения рабочих "каблучков" типа Кангу и Берлинго вообще привык без него обходится, либо тех. данные никакие — камеры очень плохого качества… Уже думал что печаль… :( Но вот за пару дней поисков наткнулся на то о чем мечтал действительно — HD Recorder. Нашел его у одного из драйвечан, и у других. Все в восторге от данного устройства. Качество видео очень хорошее, в машине не видно его вообще, крепления на штатное зеркало любой машины, вообщем то что доктор прописал! </p>
					</div>
				</div>
				<div>
					<div class="o_imgs">
						<img src="img/o2.jpg" class="otziv_photo" alt="">
						<img src="img/o22.jpg" class="otziv_tovar" alt="">
						<p>Андрей</p>
						<p><span>г. Харьков</span></p>
					</div>
					<div class="o_text">
						<p>Достоинства: <br> Два видеорегистратора, давно хотел именно двухканальный видеорегистратор, но не было на рынке моделей с адекватной стоимостью. Потом увидел в продаже такое зеркало и решил купить его. По сути есть всё что нужно, кроме антирадара. Мне по городу он не нужен, а если еду за город - ставлю обычный недорогой антирадар. В целом устройство порадовало, существенных недостатков пока не обнаружил. Кстати, доставили на удивление очень быстро...</p>
					</div>
				</div>
				<div>
					<div class="o_imgs">
						<img src="img/o3.jpg" class="otziv_photo" alt="">
						<img src="img/o33.jpg" class="otziv_tovar" alt="">
						<p>Денис</p>
						<p><span>г. Полтава</span></p>
					</div>
					<div class="o_text">
						<p>Не бросается в глаза любителям чужого добра. Длина провода питания позволяет убрать его полностью, при наличии правильно растущих рук - блок питания убрать из виду. Держится на штатном зеркале очень хорошо, не взирая на качество дорог. Зум - очень хороший, можно пользоваться при включенной записи. Стандартного (заводского) разрешения записи хватает с лихвой для уверенного опознания номера с дистанции 30-50 м, лица человека - примерно так же. Ночная съемка - без подсветки хватает даже минимального освещения для понимания снятого. В свете фар все видно четко.</p>
					</div>
				</div>
				<div>
					<div class="o_imgs">
						<img src="img/o4.jpg" class="otziv_photo" alt="">
						<img src="img/o44.jpg" class="otziv_tovar" alt="">
						<p>Владимир</p>
						<p><span>г. Киев</span></p>
					</div>
					<div class="o_text">
						<p>Здравствуйте! Это Владимир из Киева. Заказ 7355. Заказывал у вас зеркало DVR-Mirror на рено Меган. Спасибо! Посылка пришла, регистратор установил, все работает отлично.</p>
					</div>
				</div>				
			</div>
		</div>
	</div>

	<div class="econom">
		<div class="center">
			<h2><span>сэкономьте <?php echo $price?> рублей.</span> при покупке видеозеркалe HD Recorder</h2>
			<div class="economs_blocks">
				<div class="block_econom">
					<h3>видеорегистратор - провода - лишнее место</h3>
					<img src="img/img7.jpg" alt="">
					<ul>
						<li><img src="img/ico10.png" alt="">Стандартный регистратор может частично перекрыть водительский обзор</li>
						<li><img src="img/ico10.png" alt="">Стандартный видеорегистратор приходится снимать после парковки автомобиля, чтобы избежать привлечения воров</li>
						
					</ul>
				</div>
				<div class="block_econom good">
					<h3>HD Recorder <span>+ камера заднего вида</span></h3>
					<img src="img/img8.jpg" alt="">
					<ul>
						<li><img src="img/ico11.png" alt="">Регистратор решает обе эти проблемы, он незаметен в зеркале. В этом устройстве применена технология видеоинформации Full HD PROF, благодаря чему  изображение - максимально четкое.</li>
					
					</ul>
				</div>
			</div>
			<div class="akcia_block">
				<img src="img/ico4.png" class="akcia_title" alt="">
				<h2><span>Закажите</span> Видеозеркало HD Recorder <span>до конца дня и получите специальную скидку</span>50%! </h2>
				<div class="akcia_left">
					<img src="img/akcia_img.jpg" alt="" width="300" height="300">
					<p>Видеозеркало HD Recorder</p>
					<div class="price"><span><?php echo $old_price?> рублей.</span><ins><?php echo $price?> рублей.</ins></div>
				</div>
				<div class="akcia_right">
					<div class="form">
						<div class="form_title">Введите ваш номер телефона, чтобы заказать видеозеркало HD Recorder прямо сейчас:</div>
						<form method="post" action="post.php">
							<div class="element"><input type="text" name="name" placeholder="Ваше ФИО"></div>
							<div class="element"><input type="text" name="phone" required id="phone" placeholder="+7"></div>
							<div class="element"><input type="submit" value="Заказать видеозеркало"></div>
							<p>1. Мы позвоним Вам, чтобы <br>сформировать заказ.</p>
							<p>2. Заявка Вас ни к чему не обязывает. <br>Вы сможете отказаться в любой момент.</p>
							<input type="hidden" name="product" value="ua-hdrecorder">
							<input type="hidden" name="productid" value="931">
							<input type="hidden" name="hash" value="287de002a05e7cd4f646835952a0baea">
							<input type="hidden" name="landing" value="ua-hdrecorder">
							<input type="hidden" name="astt" value="J7ti8rMw7s">
							<input type="hidden" name="astt2" value="0">
							<input type="hidden" name="astsid" value="0">
							<input type="hidden" name="partner" value="Юрий1 (267)">
							<input type="hidden" name="mucus" value="partner=Юрий1 (267)&cpasource=easyleads&feed=J7ti8rMw7s&astt=J7ti8rMw7s&sub1=регистратор&sub2=none&sub3=3553619459&uid=J7ti8rMw7s">
							
							<input type="hidden" name="country" value="UA">
						</form>
					</div>
				</div>
			</div>
			<ul class="icons justi">
				<li>
					<div class="ico"><img src="img/ico6.png" alt=""></div>
					<p>Доставка <br>по всей Украине</p>
				</li>
				<li>
					<div class="ico"><img src="img/ico7.png" alt=""></div>
					<p>Оплата при получении</p>
				</li>
				<li>
					<div class="ico"><img src="img/ico8.png" alt=""></div>
					<p>Гарантия 1 год</p>
				</li>
				<li>
					<div class="ico"><img src="img/ico9.png" alt=""></div>
					<p>Вся продукция <br>сертифицирована</p>
				</li>
			</ul>
		</div>
	</div>

	<div class="har">
		<div id="id3" style="top:-80px;"></div>
		<div class="center">
			<h2>характеристики. Комплектация. сертификаты</h2>
			<div class="blocks">
				<div class="har_block">
					<h3>характеристики</h3>
					<ul>
						<li>
							<span>Матрица: CMOS </span>
							
						</li>
						<li>
							<span>Запись видео: 30 кадров в секунду, 1080Р, VGA</span>
							
						</li>
						<li>
							<span>Встроенный экран, монитор обладает удобным русифицированным меню</span>
						</li>
						<li>
							<span>Технические особенности:</span>
							<p>-экран: 4,3" TFT-LCD экран с форматом изображения 16:9</p>
						</li>
						<li>
							<span>Особенности видеосъемки:</span>
							<p>- Функция цифровой стабилизации изображения</p>
							<p>- Запись видео с кодеком H.264</p>
							<p>- Функция циклической записи видеороликов (без промежутков)</p>
							<p>- Функция наложения на видео даты, времени</p>
							<p>- Функция автоперехода в режим ночной съемки</p>
							<p>- Функция автостарта записи при подаче питания</p>
							<p>- Функция автоотключения при выключении питания</p>
							<p>- Функция автоматической защиты файла по сигналу G-сенсора</p>
						</li>
					</ul>
					<ul>
						<li>
							<span>Особенности оптики:</span>
							<p>- Стеклянный объектив с матрицей NT99142 100w/OV2710+ISP(AW6131) 200W</p>
							<p>- Диагональный угол обзора 140 гр.</p>
						</li>
						<li>
						</li>
						<li>
							<span>Особенности звука:</span>
							<p>- Оснащен микрофоном для записи звука вокруг (можно отключить)</p>
							<p>- Оснащен встроенным динамиком для воспроизведения звука при просмотре</p>
							<p>- Разъем 3.5мм</p>
						</li>
						<li>
							<span>Особенности памяти:</span>
							<p>- Поддерживает карты памяти MicroSD Class 6 и выше, ёмкостью до 32Гб</p>
						</li>
						<li>
							<span>Особенности фотографирования:</span>
							<p>- Фото в формате JPEG</p>
							<p>- Размер фото 5Mpx</p>
						</li>
						<li>
							<span>Особенности питания:</span>
							<p>- Оснащен встроенной Li-ion аккумуляторной батареей емкостью 800 mAh</p>
						</li>
						<li>
							<span>Дополнительно:</span>
							<p>- Есть датчик удара (G-сенсор)</p>
							<p>- Есть USB 2.0</p>
						</li>
					</ul>
				</div>
				<div class="coplect_block">
					<h3>Комплектация</h3>
					<img src="img/img1.png" alt="">
					<p>- Адаптер питания в прикуриватель</p>
					<p>- Выносная камера с кабелем длинной 6м</p>
					<p>- Провода для подключения к бортовой сети напрямую</p>
					<p>- Кабель USB</p>
					<p>- Инструкция по эксплуатации</p>
					<p>- Гарантийный талон. Гарантия - 1 год</p>
				</div>
				<div class="coplect_block">
					<h3>сертификаты соответствия</h3>
					<span><a rel="f" href="img/sert0.jpg" class="fancy"><img src="img/sert0.jpg" alt=""></a></span>
					<a rel="f" href="img/sert1.jpg" class="fancy"><img src="img/sert1.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<div class="har" style="height: 1000px; padding: 0">
		<div class="center">
			<h2>Галерея</h2>
			<ul>
				<li style="border: 3px solid #e1e1e1; padding: 30px; display: block; float: left; height: 470px; width: 470px; margin-right: 10px; margin-top: 10px;"><a class="grouped_elements" data-fancybox="group" href="img/1.jpg"><img src="img/1.jpg" alt="" width="400" height="400" style="position: static"/></a></li>
				<li style="border: 3px solid #e1e1e1; padding: 30px; display: block; float: left; height: 470px; width: 470px; margin-top: 10px;"><a class="grouped_elements" data-fancybox="group" href="img/2.jpg"><img src="img/2.jpg" alt="" width="400" height="400" style="position: static"/></a></li>
				<li style="border: 3px solid #e1e1e1; padding: 30px; display: block; float: left; height: 470px; width: 470px; margin-right: 10px; margin-top: 10px;"><a class="grouped_elements" data-fancybox="group" href="img/3.jpg"><img src="img/3.jpg" alt="" width="400" height="400" style="position: static"/></a></li>
				<li style="border: 3px solid #e1e1e1; padding: 30px; display: block; float: left; height: 470px; width: 470px; margin-top: 10px;"><a class="grouped_elements" data-fancybox="group" href="img/5.jpg"><img src="img/5.jpg" alt="" width="400" height="400" style="position: static"/></a></li>
			</ul>
		</div>
	</div>	
	

	<div class="how">
		<div id="id4" style="top:-80px;"></div>
		<div class="center">
			<div class="how_left">
				<h3>как мы работаем</h3>
				<p><img src="img/ico12.png" alt="">1. Заполните форму заявки</p>
				<p><img src="img/ico13.png" alt="">2. Менеджер позвонит Вами оформит заказ</p>
				<p><img src="img/ico14.png" alt="">3. Мы отправим видеозеркало</p>
				<p><img src="img/ico15.png" alt="">4. Оплачиваете наличными при получении</p>
			</div>
			<div class="how_right">
				<div class="form">
					<form method="post" action="post.php">
						<p>Заполните форму, чтобы заказать видеозеркало  HD Recorder</p>
						<div class="element"><input type="text" name="name" placeholder="Ваше ФИО"></div>
						<div class="element"><input type="text" name="phone" required id="phone" placeholder="+7"></div>
						<div class="element"><input type="submit" value="Заказать видеозеркало"></div>
						<input type="hidden" name="product" value="ua-hdrecorder">
						<input type="hidden" name="productid" value="931">
						<input type="hidden" name="hash" value="287de002a05e7cd4f646835952a0baea">
						<input type="hidden" name="landing" value="ua-hdrecorder">
						<input type="hidden" name="astt" value="J7ti8rMw7s">
						<input type="hidden" name="astt2" value="0">
						<input type="hidden" name="astsid" value="0">
						<input type="hidden" name="partner" value="Юрий1 (267)">
						
						<input type="hidden" name="country" value="UA">
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="footer">
		<div class="center">
			<img src="img/logo.png" alt="" class="logo">
			<div class="timework">КРУГЛОСУТОЧНО <span>прием заявок</span></div>
			<div class="right_side">
				<p>Есть вопросы?</p>
				<span><a href="#" class="call_back_href" style="text-decoration: none; color: #000">ЗАКАЖИТЕ ЗВОНОК</a></span>
				<p>Мы перезвоним в течение 15 минут</p>
			</div>
			<div style="text-align: center; margin-top:25px;">Адрес: город, ул. 1 <a target="_blank" href="#">Политика конфиденциальности</a></div>
		</div>
	</div>

	<div class="popup popup_callback">
		<div class="krest">X</div>
		<div class="form">
			<div class="form_title">Введите ваш номер телефона</div>
			<form method="post" action="post.php">
				<div class="element"><input type="text" name="name" placeholder="Ваше ФИО"></div>
				<div class="element"><input type="text" name="phone" required id="phone" placeholder="+7"></div>
				<div class="element"><input type="submit" value="Заказать звонок"></div>
				<p>Мы позвоним Вам в течение 15 минут.</p>
				<input type="hidden" name="product" value="ua-hdrecorder">
				<input type="hidden" name="productid" value="931">
				<input type="hidden" name="hash" value="287de002a05e7cd4f646835952a0baea">
				<input type="hidden" name="landing" value="ua-hdrecorder">
				<input type="hidden" name="astt" value="J7ti8rMw7s">
				<input type="hidden" name="astt2" value="0">
				<input type="hidden" name="astsid" value="0">
				
				
				<input type="hidden" name="country" value="UA">
			</form>
		</div>
	</div>
</div>

</body>


</html>