<?php
register_shutdown_function("errorHandler");
require 'vendor/autoload.php';
echo \app\Application::run();


function errorHandler()
{
    $error = error_get_last();

    if (isset($error['message'])) {
        echo $error['message'];
        return true;
    }

    return false;
}