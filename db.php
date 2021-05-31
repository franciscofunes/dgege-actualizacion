<?php

$db = new Mysqli;

//local host
$db-> connect('localhost','root', '','base_primaria');

//db remote host
//$db-> connect('remotemysql.com','DwUV5JYpGG', 'RFuMENqx7Y','DwUV5JYpGG');

if(!$db){
    echo "error database connection";
}

?>