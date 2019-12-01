<?php
require_once '../config/connection.php';
require_once 'createtbl.php';

$link = mysqli_connect($host, $user, $password);

if($link){
    if(mysqli_select_db($link, $database)){}
    else{
        die("Ошибка, база данных не найдена" . mysqli_error($link));
    }
}
else{
    die("Ошибка, при подключении к серверу" . mysqli_error($link));
}

$output = "SELECT * FROM $nametbl";

$query = mysqli_query($link, $output);

if($query){
    echo '<ul>';
    while($row = mysqli_fetch_object($query)){
        echo '<li><b>'.$row->name.'</b><li>';
    }
    echo '</ul>';
}

mysqli_close($link);
?>