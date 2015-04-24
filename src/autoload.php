<?php
spl_autoload_register(
    function($class) {
        include_once 'src/' . $class . '.php';
    }
);