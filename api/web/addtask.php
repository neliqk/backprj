<html>
    <head>
        <title>Список задач</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <meta charset='UTF-8'>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>Добавление новой задачи в список</h1>
            </div>
            <div id="links">
                <ul>
                    <li><a href="viewtasks.php"><h2>Просмотреть список задач</h2></a></li>
                    <li><a href="index.html"><h2>Главная страница</h2></a></li>
                </ul>
            </div>
            <div id="main">
                <div id="content">
                    <form method="POST" action="../modules/createtask.php">
                        <input type="text" name="task" id="task" placeholder="Название задачи..." size="30">
                        <input type="submit" name="sendtask" id="sendtask" value="Добавить задачу">
                    </form>
                    <h1>Задача успешно добавлена</h1>
                </div>
            </div>
        </div>
    </body>
</html>