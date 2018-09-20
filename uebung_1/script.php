#!/usr/bin/php
<?php
/**
 * ##### Listing of files and filter file media types #####
 **/
$dir = ".";
function human_filesize($size, $precision = 2) // human readable file size function
{
    $i = 0;
    while (($size / 1024) > 0.9) {
        $i++;
        $size /= 1024;
    }
    return round($size, $precision) . ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'][$i];
}

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

foreach ($files as $file) {  // every element of $files is put into $file
    if (is_dir("$dir/$file")) {  // list all files if no filter
        continue;
    }
    if (empty($contenttype)) {
        echo $file . " " . human_filesize(filesize($dir . "/" . $file)) . " " .
            mime_content_type($dir . "/" . $file) . "\n";
        continue;
    }
    $test = mime_content_type($dir . "/" . $file);
    if (strpos($test, $contenttype) === 0) {
        echo $file . " " . human_filesize(filesize($dir . "/" . $file)) . " " .
            mime_content_type($dir . "/" . $file) . "\n";
    }
}
