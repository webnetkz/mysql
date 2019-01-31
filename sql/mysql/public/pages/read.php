<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Read</title>

        <meta charset="UTF-8">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../../miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/mobileStyle.css">
          
    </head>
    
    <body>

        <img src="../img/logoMySQL.svg" alt="logotype MySQL" class="logoBackground">

        <header>
                <a href="../../index.html">
                        <img src="../img/logoMySQL.png" alt="logotype MySQL" class="logo">
                </a>
            <nav>
                <ul>
                    <a href="create.php" class="menuList">
                        <li class="menuItem">Create</li>
                    </a>
                    <a href="read.php" class="menuList">
                        <li class="menuItem">Read</li>
                    </a>
                    <a href="update.php" class="menuList">
                        <li class="menuItem">Update</li>
                    </a>
                    <a href="delete.php" class="menuList">
                        <li class="menuItem">Delete</li>
                    </a>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Read Comands</h1>
                <hr>
            <p>
                Просмотр доступных баз данных.
            </p>
                <code>
                    SHOW DATABASES;
                </code>
            <p>
                Просмотр таблиц выбранной базы данных.
            </p>
                <code>
                    SHOW TABLES;
                </code>
            <p>
                Использование базы данных.
            </p>
                <code>
                    USE <span class="command">nameDB</span>;
                </code>
            <p>
                Просмотр всего содержимого таблици.
            </p>
                <code>
                    SELECT * FROM <span class="command">nameTable</span>;
                </code>
            <p>
                Просмотр структуры таблици.
            </p>
                <code>
                    DESC <span class="command">nameTable</span>;
                </code>
            <p>
                Просмотр определенных колонок с условием и регулярным выражением <span class="name">PERL</span>.
            </p>
                <code>
                    SELECT <span class="command">name, password</span> FROM <span class="command">nameTable</span> 
                    WHERE <span class="command">id = 4</span> AND <span class="command">name</span> LIKE <span class="command">'%needName%'</span>; 
                </code>
        </main>
    </body>
</html>