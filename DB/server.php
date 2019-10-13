<?php
$link = @mysql_connect("localhost","root","");
mysql_query('set names utf8');
$db = mysql_select_db("DB");
?>