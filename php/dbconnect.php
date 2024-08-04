<?
   $host = 'localhost';  // Хост, у нас все локально
   $user = 'root';    // Имя созданного вами пользователя
   $pass = 'root'; // Установленный вами пароль пользователю
   $db_name = 'leads';   // Имя базы данных
   $port = 3306;
   $link = mysqli_connect($host, $user, $pass, $db_name, $port); // Соединяемся с базой

   // Ругаемся, если соединение установить не удалось
   if (!$link) {
     echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
     exit;
   }

?>