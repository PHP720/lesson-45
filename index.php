<!DOCTYPE html>
<html>	
	<head>
		<title>Получаем данные форму</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<form action="app/check.php" method="post">
			<p>Имя: <input name="name" type="text"></p>
			<p>Фамилия: <input name="surname" type="text"></p>
			<p>E-mail: <input name="email" type="text"></p>
			<p>Сообщение: <br /><textarea name="message" cols="30" rows="5"></textarea></p>
			<p><input type='submit' value='Отправить'></p>
		</form>
	</body>
</html>