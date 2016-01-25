<?php
    set_time_limit(0);

    ini_set("memory_limit", "256M");
    setlocale(LC_MONETARY, 'en_US');
    date_default_timezone_set('Europe/Amsterdam');

    require_once("classes/json-rpc-client.php");
    require_once("classes/daemon.class.php");
?>
