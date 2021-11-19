<?php
    session_start();
    session_destroy();
    header('Location: /web-serv/view/login.view.php');