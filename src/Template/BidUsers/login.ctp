<!DOCTYPE html>
<html >
    <head>
        <title>Calm breeze login screen</title>
        <?= $this->Html->css('login.css') ?>
        <?= $this->Html->script('login.js') ?>
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
                <h1>Welcome</h1>

                <form role="form" action='' method='post'>
                    <input name='username' type="text" placeholder="Alias">
                    <input name='password' type="password" placeholder="********">
                    <button type="submit" id="login-button">Login</button>
                </form>
            </div>

            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </body>
</html>
