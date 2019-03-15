<?php
/**
 * Created by PhpStorm.
 * User: riijon
 * Date: 2016/08/31
 * Time: 19:07
 */

/**
 * Myapp　全体の名前空間
 * Index.php controller
 * Myapp\Controller\Index
 * -> lib/Controller/Index.php　クラスファイルの配置場所

if (strpos($class, $prefix) === 0)
 * $classの$prefixの位置が0,すなわち先頭であったらの意味
 */


spl_autoload_register(function($class) {
    $prefix = 'MyApp\\';
    if (strpos($class, $prefix) === 0) {
        $className = substr($class, strlen($prefix));
        $classFilePath = __DIR__ . '/../lib/' . str_replace('\\', '/', $className) . '.php';
        if (file_exists($classFilePath)) {
            require $classFilePath;
        }
    }
});
