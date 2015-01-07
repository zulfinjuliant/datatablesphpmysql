<?php
$connect = mysql_connect("localhost", "root", ""); //ini setingan default, namun jika kamu memiliki setingan sendiri mohon disesuaikan aja
if(!$connect){
	die ("Error: ".mysql_error());
}
mysql_select_db("datphp", $connect); //konekin ke database kamu namanya apa, kalo disini namanya 'datphp'
$db = mysql_query("SELECT * FROM datables"); //isi nama tabel kamu, kalo disini namanya 'datables'
?>