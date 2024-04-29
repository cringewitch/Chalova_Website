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
        <div class="container nav_bar">
            <div class="row">
                <div class="row">
                    <div class="col-3 nav_logo"></div>
                    <div class="col-9">
                        <div class="nav_text">Немного обо мне <3</div>
                    </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-9">
                    <h2>Чалова Аня, студентка третьего курса иб. Мемы и визуальные новеллы как смысл жизни <br><br>
                        Привет. У меня к тебе пару просьб, а именно: <br>1. Подрубай в 17:00, я в это время прихожу со школы, 
                        и отрубай в 21:00, в это время я ложусь спать. <br>2. Не матерись на стриме, моя мама возле меня и 
                        всё слышит. <br><br>Спасибо!
                    </h2>
                </div>
                <div class="col-3">
                    <div class="row my_photo"></div>
                    <div class="title_photo">Чалова А.В.</div>
                </div>
            </div>
        </div>
        
        <div class="container">
                <div class="row1">
                    <div class="button_js">
                        <a href="#" id="myButton">жмав</a>
                        <p id="demo"></p>
                    </div>
                </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="hello">
                        <br><br> Привет, <?php echo $_COOKIE['User']; ?>
                    </h1>
                </div>
                <div class="col-12">
                    <form method="POST" class="cringe" action="profile.php">
                        <input type="text" class="form" type="text" name="title" placeholder="Заголовок Вашего поста" style="margin-bottom: 20px; margin-top: 10px"></input><br>
                        <textarea name="text" cols="30" rows="10" placeholder="Введите текст Вашего поста..." style="margin-bottom: 20px;"></textarea><br>
                        <button type="submit" class="btn_red" name="submit">Сохранить пост <3</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/zhmav.js"></script>
    </body>
    </html>
