
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <link href="style.css" rel="stylesheet">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title></title>

</head>

<body>
<div class="header">
<div id="skladizdtit">
    <h1>Сборочный цех</h1>
</div>
<div class="avtorization">
<div id="login">
<a href="login.php">Вход</a>
</div>
<div id="signup">
<a href="signup.php">Регистрация</a>
</div>
</div>
<div class="middle">

        <div class="container">
            <main class="content">
    <nav class="menu">
    <ul class="topmenu">
 <li><a href = "priemdet.php">Прием деталей</a></li>
 <li><a href = "priemizd.php">Прием изделий</a>
</li>
 <li><a href = "otpdet.php">Отпуск деталей</a></li>
 <li><a href = "otpizd.php">Отпуск изделий</a></li>
 <li><a href = "zakazdet.php">Оформление заказа</a></li>
 <li><a href = "#">Получение справок<i class="fa fa-angle-down"></i></a>
 <ul class="submenu">
<li><a href = "nalichdet.php">О наличии деталей</a></li>
<li><a href = "readyproduct.php">О готовых изделиях</a></li>
<li><a href = "sborkadet.php">О комплекте деталей</a></li>
<li><a href = "nedostdet.php">О недостающих деталях</a></li>
</ul>
</li>
</ul>
</nav>
<div class="registr">
<div id="title-registr">
<p>Регистрация</p>
</div>
<div class="registrform">
<form action="" method="POST">
   <input type="text" class="nameuser" id="nameuser" autocomplete="off" spellcheck="false"  name="nameuser" value="<?=@$_POST['nameuser']?>"   placeholder="Введите ваше имя..." />
   <input type="text" class="loginuser" id="loginuser"  autocomplete="off"spellcheck="false" name="loginuser" value="<?=@$_POST['loginuser']?>" placeholder="Введите ваш логин..." />
	 <input type="text" class="emailuser" id="emailuser" autocomplete="off"spellcheck="false" name="emailuser"value="<?=@$_POST['emailuser']?>"   placeholder="Введите ваш e-mail..." />
	 <input type="text" class="birthdateuser" id="birthdateuser" autocomplete="off"spellcheck="false" name="birthdateuser"value="<?=@$_POST['birthdateuser']?>" placeholder="Введите вашу дату рождения..." />
	 <input type="password" class="passuser" id="passuser" autocomplete="off"spellcheck="false" name="passuser"placeholder="Введите ваш пароль..." />
	 <input type="password" class="accpassuser"id="accpassuser" autocomplete="off"spellcheck="false" name="accpassuser"placeholder="Подтвердите ваш пароль..." />
   <input type="submit" name="submit"  class="button-submit"  id="submit" value="Отправить"  />
	 <label>
		 <input type="checkbox" class="checkbox" id="checkteck" name="checkbox-test" />
			 <span class="checkbox-custom" name="checkteck1" id="checkteck" value="on"></span>
			 <span class="label" id="checktitle">Я согласен(на) на обработку <br>моих персональных данных</br></span>
		 </label>
   </form>

</div>
<?php
require_once 'connect.php';
?>
</div>

</main>
</div>
</div>
</div>
</header>

</body>
</html>
