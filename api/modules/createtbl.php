<?php
require_once '../config/connection.php';

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

$nametbl = 'tasks';

$tbl = "CREATE Table IF NOT EXISTS $nametbl
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    status VARCHAR(200) NOT NULL
)";

$createtbl = mysqli_query($link, $tbl);

if($createtbl){}

mysqli_close($link);
?>