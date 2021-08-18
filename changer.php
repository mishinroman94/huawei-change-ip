<?php
require 'modem.class.php';

$time_start = microtime(true);

$modem = new Manoaratefy\NetworkTools\Modem('192.168.8.1', 'admin', 'admin');

if (!$modem->online()) {
    echo "The modem is not online. Check network connection.\n";
}


$time_end = microtime(true);
$time = $time_end - $time_start;


echo '3G - ' . $modem->change_network('3G') . '<br/>';
echo '4G - ' . $modem->change_network('4G') . '<br/><br/>';

echo round($time, 4) . " sec...\n";
