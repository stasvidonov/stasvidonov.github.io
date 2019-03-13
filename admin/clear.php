<?php
$fp = fopen("Dc4XzN4dL.txt", 'a'); //Открываем файл в режиме записи
// ftruncate($fp, 0) // очищаем файл
if (ftruncate($fp, 0)) {
	header( 'Refresh: 0; url=/admin/' );
}
else {
	echo "Ошибка очистки лога.";
}
?>