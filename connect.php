<?php
$connection= new mysqli('localhost','root','id12810316_deltaplantest','1234567')or die("Could not connect to mysql".mysqli_error($connection));
?>

/* При добавлении формы регистрации , в файле connect.php столкнулся с ошибкой:
Warning: mysqli::__construct(): (HY000/1045): ProxySQL Error: Access denied for user 'root'@'2a02:4780:bad:f00d::c' (using password: YES) in /storage/ssd4/316/12810316/public_html/connect.php on line 2
пытаюсь найти решение проблемы, пристально изучаю возможно google search и stackoverflow */
