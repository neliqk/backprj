<?php
require_once '../config/connection.php';
require_once 'createtbl.php';

if(isset($_POST['task'])){

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

$nametask = htmlentities(mysqli_real_escape_string($link, $_POST['task']));
$default = 'Not done';

$add = "INSERT INTO $nametbl VALUES(NULL, '$nametask', '$default')";

$addtask = mysqli_query($link, $add);

if($addtask){}
else{
    die("Ошибка, невозможно добавить задачу" . mysqli_error($link));
}

mysqli_close($link);
}
header("Location: ../web/addtask.php");
?>