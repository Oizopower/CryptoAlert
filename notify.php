#!/usr/bin/php
<?php
    require_once('config.php');

    (PHP_SAPI !== 'cli' || isset($_SERVER['HTTP_USER_AGENT'])) && die('This daemon can only run in CLI');

    if(isset($argv[1]) && !empty($argv[1]))
    {
        if(is_file(dirname(__FILE__).'/profiles/'.$argv[1].'/config.php')) {
            require(dirname(__FILE__).'/profiles/'.$argv[1].'/config.php');
        } else {
            die('NO PROFILE SELECTED');
        }

        if(isset($argv[2]) && !empty($argv[2]))
        {
            Daemon::init($settings, $argv);
        }
        else
        {
            die('NO HASH');
        }

    }
?>