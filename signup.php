<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>

<nav class="index_navbar">
        <div class="index_navdiv">
            <ul class="index_nav_list_logo">
                <li><div class="index_nav_logo"><a href="/home"><img src="images/LogoGameLensNav.png"></a></div></li>
                <li><a class="index_nav_list_elements" href="/home"><span class="span_logo">GameLens</span></a></li>
            </ul>
            <div class="index_nav_list">
                <a class="index_nav_list_elements" id="index_nav_list_element_yourlist" href="#">Your List <i class="fa-solid fa-scroll"></i></a>
                <a class="index_nav_list_elements" id="index_nav_list_element_yourlist" href="#">Games <i class="fa-solid fa-gamepad"></i></a>
                <a class="index_nav_list_elements" id="index_nav_list_element_yourlist" href="/login">Login <i class="fa-solid fa-user"></i></a>
            </div>
        </div>
</nav>

<div class="wrapper">
    <div class="container">
            <div class="login_header">
                <div class="logo_header">
                    <img id="logoimg" src="images/LogoGameLensNav.png">
                    <span id="span_nameLogo">GameLens</span>
                    
                </div>
                
                <p id="login_text">Cria a tua conta</p>
            </div>

            <div class="login_box">
            
            <form action="#"></form>
                <div class="login_data">
                    <div class="login_data_username">
                        
                        <input class="login_input" type="text" name="signup_username" placeholder="username">
                        <label class="userIcon"><i class="fa-solid fa-user"></i></label>
                    </div>

                    <div class="login_data_password">
                        
                        <input class="login_input" type="password" name="signup_password" placeholder="password">
                        <label class="userIcon"><i class="fa-solid fa-lock"></i></label>
                    </div>
                    <div class="login_data_password">
                        
                        <input class="login_input" type="password" name="signup_confirmPassword" placeholder="confirma a password">
                        <label class="userIcon"><i class="fa-solid fa-lock"></i></label>
                    </div>
                </div>

                <div class="login_noAcc">
                    <label>Já tem conta?</label>
                    <a href="/login">Inicie sessão</a>
                </div>

                <div class="login_button">
                    <button id="login_button_id" type="submit">Registar</button>
                </div>
            </form>
            </div>
            
            </div>
    </div>
</div>
</body>
</html>