<!doctype html>
<html lang=ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageData['title']; ?> </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
      <section class="main-content">
          <div class="container">
              <form action="" class="form-signin" id="form__signin" method="post">
                  <input type="hidden" class="form__input" name="action" value="login">
                  <?php if(!empty($pageData['error'])) :?>
                <p> <?php echo $pageData['error']; ?></p>
                <p> <?php endif; ?></p>
                  <input type="text" class="form__input" name="login" id="login_sign" placeholder="Логин" required>
                  <input type="password" class="form__input" name="password" id="password_sign" placeholder="Пароль" required>
                  <button type="submit" id="signinbutton" class="form__button">Войти</button>
              </form>
              <div id="result_form"></div>
              <form action="" class="form-signin" id="form-signin" method="post">
                  <input type="hidden" class="form__input" name="action" value="register">
                  <?php if(!empty($pageData['registerMsg'])) :?>
                  <p> <?php echo $pageData['registerMsg']; ?></p>
                  <p> <?php endif; ?></p>
                  <input type="text" class="form__input" name="login" id="login_reg" placeholder="Логин" required>
                  <input type="password" class="form__input" name="password" id="password_reg" placeholder="Пароль" required>
<!--                  <input type="password" class="form__input" name="password" id="password" placeholder="Пароль" required>-->
                  <input type="email" class="form__input" name="email" id="email" placeholder="email" required>
                  <input type="text" class="form__input" name="name" id="name" placeholder="имя" required>
                  <button type="submit" class="form__button">Регистрация</button>
              </form>
          </div>
      </section>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/lib.js"></script>

</body>
</html>