<?php
/**
 * Created by PhpStorm.
 * User: riijon
 * Date: 2016/09/05
 * Time: 10:56
 */

namespace MyApp\Exception;

class DuplicateEmail extends \Exception {
    protected $message = 'Duplicate Email!';
}