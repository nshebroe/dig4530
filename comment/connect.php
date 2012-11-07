<?php

/* Database config */
$db_host		= 'sulley.cah.ucf.edu';
$db_user		= 'ni718068';
$db_pass		= '12Nicole';
$db_database		= 'ni718068'; 

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>