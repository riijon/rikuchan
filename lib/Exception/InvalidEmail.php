<?php
/**
 * Created by PhpStorm.
 * User: riijon
 * Date: 2016/09/05
 * Time: 10:56
 */

namespace Myapp\Exception;

class InvalidEmail extends \Exception {
    protected $message = 'Invalid Email!';
}