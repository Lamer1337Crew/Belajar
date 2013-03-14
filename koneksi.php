<?php
define("SERVER_DB","localhost"); // host database;
define("USERDB","root"); //username database;
define("PASSDB",""); //password database;
define("USE_DB","hendi"); //database yang digunakan;
$koneksi = mysql_connect(SERVER_DB,USERDB,PASSDB);
mysql_select_db(USE_DB,$koneksi);
?>
