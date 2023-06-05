<?php

ignore_user_abort(false);

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

while (!connection_aborted()) {
    echo 'data: Now: ', time(), PHP_EOL, PHP_EOL;
    ob_flush();
    sleep(1);
}