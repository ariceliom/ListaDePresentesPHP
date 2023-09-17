<?php

function __autoload($class_name) {

    if (file_exists(__DIR__ . '/control/' . $class_name . '.php')) {
        require_once __DIR__ . '/control/' . $class_name . '.php';
    } else if (file_exists(__DIR__ . '/model/' . $class_name . '.php')) {
        require_once __DIR__ . '/model/' . $class_name . '.php';
    } else {
        exit();
    }
}