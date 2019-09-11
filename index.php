<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <title>
            DzenCode Task
        </title>
    </head>
    <body>
        <div class="article">Комментарии к статье Noname</div>
        <div class="add-comment">
            <form>
                <fieldset>
                    <legend>Добавить комментарий</legend>
                        <p><label for="name">Имя пользователя<em>*</em></label><input type="text" id="username"></p>
                        <p><label for="email">E-mail <em>*</em></label><input type="email" id="email"></p>
                        <p><label for="homepage">Домашняя страница</label><input type="url" id="homepage"></p>
                        <?php 
                        // используется либа отсюда: https://github.com/Gregwar/Captcha 
                        require_once 'vendor/autoload.php';
                        use Gregwar\Captcha\CaptchaBuilder;
                        use Gregwar\Captcha\PhraseBuilder;
                        $phraseBuilder = new PhraseBuilder(5, '0123456789qwertyuiopasdfghjklzxcvbnm');
                        $builder = new CaptchaBuilder(null, $phraseBuilder);
                        $builder->build();
                        $builder->save('out.jpg');
                        echo '<p><input type="image" src="out.jpg"></p>';
                        echo '<p><label for="capcha"> Введите текст с картинки</label><input type="text" id="capcha"></p>';
                        ?>
                        <p><input type="submit" value="Отправить"></p>
                </fieldset>
            </form>
        </div>
        <div class="comment">
            <div class="username">
                username
            </div> 
            <div class="email">
                email@email.com
            </div>
            <div class="homepage">
                http://homepage.com/123
            </div>
            <div class="answer">
                Lorem ipsum dolor sit amet, consectetuer 
                adipiscing elit, sed diem nonummy nibh euismod tincidunt ut lacreet 
                dolore magna aliguam erat volutpat.
            </div>
        </div>
    </body>
</html>