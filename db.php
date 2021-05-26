<?php

$db = new Mysqli;

$db-> connect('localhost','root', '','base_primaria');

if(!$db){
    echo "error database connection";
}

?>