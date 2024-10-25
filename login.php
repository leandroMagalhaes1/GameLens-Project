<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>


    <div class="container">
            <div class="login_header">
                <div class="logo_header">
                    <img id="logoimg" src="imagens/LogoGameLensNav.png">
                    <span id="span_nameLogo">GameLens</span>
                </div>
                <p id="login_text">Login</pi>
            </div>

            <div class="login_box">
            <form action="#"></form>
                <div class="login_data">
                    <div class="login_data_username">
                        <span class="userIcon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="login_username" placeholder="username">
                    </div>

                    <div class="login_data_password">
                        <span class="userIcon"><i class="fa-solid fa-lock"></i></span>
                        <input type="text" name="login_password" placeholder="password">
                    </div>
                </div>

                <div class="login_noAcc">
                    <a href="#">Criar conta</a>
                </div>

                <div class="login_button">
                    <button id="login_button_id" type="submit">Login</button>
                </div>

            </div>
            </form>
    </div>

</body>
</html>