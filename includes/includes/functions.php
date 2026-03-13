<?php

function clean($data){
$data = trim($data);
$data = htmlspecialchars($data);
return $data;
}

function random_id($length = 10){
return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"),0,$length);
}

?>
