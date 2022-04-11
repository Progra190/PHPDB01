<?php


header('content type: text/html; charset = UTF-8');
$db = array(
       "hostname" => "localhost",
       "database" => "vittug",
       "username" => "root",
       "password" => ""
);
$conn = new mysqli($sb['hostname'], $sb['database'], $sb['username'], $sb['password']);
