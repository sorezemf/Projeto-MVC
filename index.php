<?php 
session_start();
require 'config.php';
require 'core.php';
spl_autoload_register(function ($class) {
    if (file_exists('controllers/' . $class . '.php')) {
        require 'controllers/' . $class . '.php';
    } else if (file_exists('models/' . $class . '.php')) {
        require 'models/' . $class . '.php';
    }
});

$core = new Core();
$core->run();

?>