<html>
<title>Кафедра О7</title>
<head>
	<meta charset="UTF-8">
	<script src="script2.js" defer></script>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<p>Телефон: +7 (812) 495-76-20</p>
	<p>Почта: admission@voenmeh.ru</p>
	<p>Адрес главного корпуса: Санкт-Петербург, ул. 1-я Красноармейская, д.1</p>
	<p>Лабораторный корпус: Санкт-Петербург, ул. 1-я Красноармейская, д. 13</p>
	
	<section id="feedback">
		<h2>Обратная связь</h2>
		<form id="feedback-form" action="feedback.php" method="post">
			<label for="subscribe-email">Email:</label>
			<input type="email" id="subscribe-email" name="subscribe-email" required>
			<label for="message">Сообщение:</label>
			<textarea id="message" name="message" required></textarea>
			<button type="submit">Отправить</button>
		</form>
	<div id="feedback-response"></div>
</section>
	</body>
</html>