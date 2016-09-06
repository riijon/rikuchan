<?php
/**
 * Created by PhpStorm.
 * User: riijon
 * Date: 2016/09/05
 * Time: 10:56
 */

namespace Myapp\Exception;

class UnmatchEmailOrPassword extends \Exception {
    protected $message = 'Email/Password do not match!';
}