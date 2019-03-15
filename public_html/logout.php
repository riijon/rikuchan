<?php
/**
 * Created by PhpStorm.
 * User: riijon
 * Date: 2016/08/31
 * Time: 17:45
 */

require_once(__DIR__ . '/../config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        echo "Invalid Token!";
        exit;
    }

    $_SESSION = [];

    if (isset($_COOKIE[session_name])) {
        setcookie(session_name(), '', time() - 86400, '/');
    }

    session_destroy();

}

header('Location: ' . SITE_URL);