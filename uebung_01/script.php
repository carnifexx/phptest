#!/usr/bin/php
<?php

require_once "LoggerCLI.php";

/**
 * ##### Listing of files and filter file media types #####
 **/
$dir = ".";

/**
 * get content type from argv and directory argument
 */
for ($i = 1; $i < $argc; $i++) {
    switch ($argv[$i]) {
        case "--content-type": //
        case "-c":  //
            $i++;
            if ($i >= $argc) {
                echo "Please enter a media type with -c (type). \n";
                exit;
            }
            $contenttype = $argv[$i];
            break;
        default:
            $dir = $argv[1];
            break;
    }
}
$files = scandir($dir);

$loggerCLI_foo = new LoggerCLI;

foreach ($files as $file) {  // every element of $files is put into $file
    if (is_dir("$dir/$file")) {  // list all files if no filter
        continue;
    }
    if (empty($contenttype)) {
        $loggerCLI_foo->print_($dir, $file);
        continue;
    }
    $test = mime_content_type($dir . "/" . $file);
    if (strpos($test, $contenttype) === 0) {
        $loggerCLI_foo->print_($dir, $file);
    }
}
