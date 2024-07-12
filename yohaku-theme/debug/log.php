<?php

$debug_log = file_get_contents(get_site_url() . '/wp-content/debug.log');

if ($debug_log === false) {
    throw new \RuntimeException('file not found.');
} else {
    $rows = explode("\n", $debug_log);
    foreach ($rows as $row) {
        echo $row . '<br>';
    }
}
