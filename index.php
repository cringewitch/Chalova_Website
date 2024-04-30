<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Чалова А.В.</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body> 
    <div class="container">
        <div class="row">
            <div class="index col-12">
                <h1> Постики <3 </h1>
            <?php
            if (!isset($_COOKIE['User'])) {
            ?>
                <a href="/registration.php" style="text-decoration: none; text-transform: lowercase;";>Зарегистрируйтесь</a>или<a href="/login.php" style="text-decoration: none; text-transform: lowercase";>войдите</a>
            <?php
            } else {
                // подключение к БД
                $link = mysqli_connect('127.0.0.1','root','!Sb0duN@-16','first');

                $sql = "SELECT * FROM posts";
                $res = mysqli_query($link, $sql);
                if (mysqli_num_rows($res) >  0) {
                    while ($post = mysqli_fetch_array($res)) {
                        echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a><br>";
                    }
                   } else {
                        echo "Записей пока нет";
                   }
            }
            ?>
            </div>
        </div>
    </div>
    </body>
</hthml>



