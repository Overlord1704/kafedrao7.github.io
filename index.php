<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Кафедра О7</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="script.js" defer></script>
</head>
<body>
	<header>
		<div class="header-content" background-image: url('headwall.jpg')>
			<div class="image-dir">
				<img src="css/O7.jpg" class="image" alt="Логотип кафедры О7">
			</div>
			<div class="text">
				<h1>Информационные технологии и программная инженерия</h1>
			</div>
		</div>
		<nav class="head-ssylki">
			<div class="nav-links">
				<a href="prepodi.html" class="smooth-transition">Преподавательский состав</a>
				<a href="contacts.php" class="smooth-transition">Контакты</a>
			</div>
			<div class="nav-buttons">
				<a href="sendnews.html" class="button" id="send-news-button" style="display:none;">Отправить новость</a>
				<a href="registration.html" class="button" id="user-info">РЕГИСТРАЦИЯ</a>
			</div>
		</nav>
	</header>
	<main>
		<div class="history">
			<h2>Перспективы выпускников кафедры О7: востребованные специалисты в области IT</h2>
			<p>Начиная с 1995 г кафедра стала выпускающей по специальности «Автоматизированные
			системы обработки информации и управления», а с 2000 г – еще и по специальности
			«Информационные системы и технологии». Проводилась подготовка инженеров для 
			проектирования и создания современных автоматизированных и информационных систем,
			построенных на основе технических и программных средств персональных компьютеров
			и сетевых технологий. На кафедре образована государственная аттестационная комиссия
			по защите ВКР бакалавров и магистерских диссертаций по направлениям подготовки 
			кафедры. Постоянно проводятся научные исследования по заказу Министерства образования
			и науки РФ, НИР, поддержанные грантами, а также хоздоговорные НИР по научным 
			направлениям кафедры. Объектами профессиональной деятельности выпускников 
			кафедры являются следующие направления:</p>
			<ul>
				<li>Технологии разработки программного обеспечения</li>
				<li>Информационная безопасность и интернет-технологии</li>
				<li>Разработка трансляторов искусственных языков</li>
				<li>Разработка пользовательского интерфейса</li>
				<li>Системы искусственного интеллекта</li>
				<li>Проектирование архитектуры программных средств</li>
			</ul>
		</div>
		<div class="spec">
			<h2>Профильные направления подготовки и специальности Кафедры О7 «Информационные системы и программная инженерия»</h2>
			<p>Современные и востребованные на рынке труда специальности и направления подготовки, которые будут актуальны в течение ближайшего времени, помогут построить успешную карьеру в сфере информационных технологий и создадут успешный трамплин для будущих свершений.</p>
			<div class="spec_ssylki">
				<div class="tile">
					<a href="projinj.html">
						<img src="css/Spec/1.jpg" alt="Программная инженерия">
						<div class="tile-text">Программная инженерия</div>
					</a>
				</div>
				<div class="tile">
					<a href="infbez.html">
						<img src="css/Spec/2.png" alt="Информационная безопасность">
						<div class="tile-text">Информационная безопасность</div>
					</a>
				</div>
				<div class="tile">
					<a href="tehrazinfis.html">
						<img src="css/Spec/3.png" alt="Технологии разработки информационных систем">
						<div class="tile-text">Технологии разработки информационных систем</div>
					</a>
				</div>
				<div class="tile">
					<a href="procimet.html">
						<img src="css/Spec/4.jpg" alt="Процессы и методы разработки программных продуктов">
						<div class="tile-text">Процессы и методы разработки программных продуктов</div>
					</a>
				</div>
				<div class="tile">
					<a href="procimetprog.html">
						<img src="css/Spec/5.jpg" alt="Процессы и методы разработки программного обеспечения">
						<div class="tile-text">Процессы и методы разработки программного обеспечения</div>
					</a>
				</div>
				<div class="tile">
					<a href="infizupsis.html">
						<img src="css/Spec/6.jpg" alt="Информационно-измерительные и управляющие системы">
						<div class="tile-text">Информационно-измерительные и управляющие системы</div>
					</a>
				</div>
			</div>
		</div>
		<section id="subscribe">
			<h2>Подписка на новости</h2>
			<form id="subscribe-form" action="check.php" method="post">
				<label for="subscribe-email">Email:</label>
				<input type="email" id="subscribe-email" name="subscribe-email" required>
				<button type="submit">Подписаться</button>
			</form>
			
		</section>
	</main>
</body>
</html>

