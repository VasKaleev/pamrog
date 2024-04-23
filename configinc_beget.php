<?php

define('DB_HOST', 'localhost'); // сервер БД
define('DB_USER', 'admin'); // логин БД
define('DB_PASS', '111'); // пароль БД
define('DB_NAME', 'pam'); // имя БД

//define('DB_HOST', 'localhost'); // сервер БД
//define('DB_USER', 'f0239595_opros'); // логин БД
//define('DB_PASS', '111'); // пароль БД
//define('DB_NAME', 'f0239595_opros'); // имя БД

//if (!$conn = mysql_connect(DB_HOST,DB_USER,DB_PASS)) {
//    echo 'не могу подключиться к серверу БД';
//        exit;
//}
//if (!mysql_select_db(DB_NAME)) {
//    echo 'не могу подключить БД';
 //       exit;
//}

//Подключение на endels
$db = mysqli_connect("localhost", "admin", "111", "pam")  OR DIE("Не могу создать соединение2 ");

//Подключение на sprinthost
//$db = mysqli_connect("localhost", "f0239595_opros", "111", "f0239595_opros")  OR DIE("Не могу создать соединение1 ");							  
//							  mysqli_set_charset($db, "utf8");
//                              @mysqli_query ($db, 'set character_set_results = "utf8"');
                             					
								//	$sortn='ORDER by `id_id` DESC';
									//$sortn='ORDER by `id_id`';
								//	$result=mysqli_query($db,'SELECT * FROM `novosti` '.$sortn.''); // запрос на выборку
?>