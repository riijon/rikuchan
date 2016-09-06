<?php
/**
 * Created by PhpStorm.
 * User: riijon
 * Date: 2016/09/01
 * Time: 13:22
 */


namespace MyApp\Controller;

class Index extends \MyApp\Controller {

    public function run() {
        if (!$this->isLoggedIn()) {
            // login
            header('Location: ' . SITE_URL . '/login.php');
            exit;
        }

        // get users info
        $userModel = new \MyApp\Model\User();
        $this->setValues('users', $userModel->findAll());
    }

}