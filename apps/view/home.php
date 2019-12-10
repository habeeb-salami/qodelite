<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Game Show System</title>
    </head>
    <body>
        <div class="container">
            <header class="header" id="header">
                <h1>The Game show system</h1>
            </header>
            <div class="row">
                <a href="login/">Login</a>
            </div>
            <aside>
                <nav id="navigation">
                    <ul id="menus">
                        <li>
                            <?php
                            $data = array('class' => 'selected');
                            echo Util::anchor('', 'Home', $data);
                            ?>
                        </li>
                        <li> <?= Util::anchor('login', 'Login'); ?> </li>
                        <li><?= Util::anchor('send_message', 'Send Message'); ?></li>
                        <li><?= Util::anchor('', 'Users'); ?></li>
                        <li><?= Util::anchor('', 'My Account'); ?></li>
                        <li><?= Util::anchor('message_log', 'Message Log'); ?></li>
                    </ul>
                </nav>
            </aside>
            <div id="content">
            </div>
    </body>
</html>
