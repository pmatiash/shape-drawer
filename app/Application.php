<?php

namespace app;

/**
 * Main application class
 * Class Application
 * @package app
 */
class Application {

    public static function run()
    {
        try {
            ob_start();
            include('views/index.php');
            $var = ob_get_contents();
            ob_end_clean();
            return $var;

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

}