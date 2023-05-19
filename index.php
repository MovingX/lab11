<!DOCTYPE html>
<html>
	<head>
		<title>Лабораторная 11</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<div class="header">
			<h1>Лабораторная 11</h1>		
		</div>		
		
		
		<div class="Block1">
			<h4>Задание 1: </h4>
			<?php
 				$var = 'hello';
 				echo $var[0]; 
 				echo $var[1]; 
 				echo $var[4]; 
			?>
			<br>

			<h4>Задание 2: </h4>
			<?php
				echo 60 * 60;
			?>
			<br>

			<h4>Задание 3: </h4>
			<?php
 				$var = 1;
 				$var += 12;
 				$var -= 14;
 				$var *= 5;
 				$var /= 7;
 				$var++;
 				$var--;
 				echo $var;
			?>
			<br>

			<h4>Задание 4: </h4>
			<?php
				$a = 3;
				echo $a;
			?>
			<br>

			<h4>Задание 5: </h4>
			<?php
				$a = 10;
				$b = 2;
				echo $a + $b;
				echo $a - $b;
				echo $a * $b;
				echo $a / $b;
			?>
			<br>

			<h4>Задание 6: </h4>
			<?php
				$c = 15;
				$d = 2;
				$result = $c + $d;
				echo $result;
			?>
			<br>

			<h4>Задание 7: </h4>
			<?php
				$a = 10;
				$b = 2;
				$c = 5;
				echo $a + $b + $c;
			?>
			<br>

			<h4>Задание 8: </h4>
			<?php
				$a = 17;
				$b = 10;
				$c = $a - $b;
				$d = 7;
				$result = $c + $d;
				echo $result;
			?>
			<br>

			<h4>Задание 9: </h4>
			<?php
				$text = 'Привет, Мир!';
				echo $text;
			?>
			<br>

			<h4>Задание 10: </h4>
			<?php
				$text1 = 'Привет, ';
				$text2 = 'Мир!';
				echo $text1 . $text2;
			?>
			<br>

			<h4>Задание 11: </h4>
			<?php
				$name = 'Пивас';
				echo 'Привет, ' . $name . '!';
			?>
			<br>

			<h4>Задание 12: </h4>
			<?php
				$age = 130;
				echo 'Мне ' . $age . ' лет!';
			?>
			<br>

			<h4>Задание 13: </h4>
			<?php
				$text = 'abcde';
				echo $text[0];
				echo $text[2];
				echo $text[4];
			?>
			<br>

			<h4>Задание 14: </h4>
			<?php
				$text = 'abcde';
				$text[0] = '!';
				echo $text;
			?>
			<br>

			<h4>Задание 15: </h4>
			<?php
				$num = '12345';
				echo $sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
			?>
			<br>

			<h4>Задание 16: </h4>
			<?php
				$hour = 60 * 60;
				echo $hour . ' Секунд в часе! ';
				$day = $hour * 24;
				echo $day . ' Секунд в дне! ';
				$month = $day * 30;
				echo $month . ' Секунд в месяце! ';
			?>
			<br>

			<h4>Задание 17: </h4>
			<?php
				date_default_timezone_set('Asia/Sakhalin');
				echo date('h:i:s a', time());
			?>
			<br>

			<h4>Задание 18: </h4>
			<?php
				$a = 3;
				$a *= $a;
				echo $a;
			?>		
			<br>

			<h4>Задание 19: </h4>
			<?php
				$var = 47;
				$var += 7;
				$var -= 18;
				$var *= 10;
				$var /= 20;
				echo $var;
			?>
			<br>

			<h4>Задание 20: </h4>
			<?php
				$text = 'Я';
				$text .= ' хочу';
				$text .= ' знать';
				$text .= ' PHP!';
				echo $text;
			?>
			<br>

			<h4>Задание 21: </h4>
			<?php
				$var = 10;
				$var++;
				$var++;
				$var--;
				echo $var;
			?>
			<br>

			<h4>Задание 22: </h4>
			<?php
				$var = 10;
				$var += 7;
				$var++;
				$var--;
				$var += 12;
				$var *= 7;
				$var -= 15;
				echo $var;
			?>
			<br>
		</div>

		<footer>
			<h1>Выполнено © Морошкином Максимом</h1>
		</footer>
	</body>
</html>	