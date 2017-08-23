
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

        <title></title>

                <link type="text/css" rel="stylesheet" href="<?=base_url('assets/fonts/font-awesome.min.css'); ?>">
                <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/style.css'); ?>">
                /*<script type="text/javascript" src="<?=base_url('js/jquery-3.1.1.min.js')?>"></script> */
    </head>

    <body id="login-page">

        <form id="login" action="<?=site_url('login/submit')?>" method="post">
            <img src= "images/Lotus-inc-01.png" alt="logo" class ="site-logo">
            <h3>Login or <a href="<?=site_url('register')?>">Register</a></h3>
            </div>

        <div id="socialmedia">
    			<button type="button" class="button-default"><i class="fa fa-facebook"></i></button>
    			<button type="button" class="button-default"><i class="fa fa-twitter"></i></button>
    			<button type="button" class="button-default"><i class="fa fa-google-plus"></i></button>

            <hr>

        </div>

            <div class="input-pair">
                <label class="fa fa-user" for="input-email"></label>
                <input type="email" id="input-email" placeholder="me@example.com" name="input-email">
            </div>

            <div class="input-pair">
                <label class="fa fa-key" for="input-password"></label>
                <input type="password" id="input-password" placeholder="password" name="input-password">
            </div>

            <div class="flex-box">
                <div class="flex-space"></div>
                <button type="submit">Login</button>
            </div>


        </form>
    <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
