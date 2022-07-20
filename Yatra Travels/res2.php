<?php

$db_user = "epiz_32203801";
$db_pass = "7IIIAp7cFsap";
$db_name = "epiz_32203801_host";


$db = new PDO('mysql:host=sql302.epizy.com;dbname='. $db_name. ';charset=utf8', $db_user ,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
