<?php
	$bd = mysqli_connect('192.168.100.20', 'fics', 'fics') or die('Erro ao Conectar');
	mysqli_select_db($bd, 'db_fanfic') or die(mysql_error($bd));
?>
