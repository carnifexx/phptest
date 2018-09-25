<?php
$dir    = '/tmp';
$files = scandir($dir, 1);

foreach ($files as $file) {
    echo $file;
    echo " ";
    echo filesize($file);
    echo "/n";
}