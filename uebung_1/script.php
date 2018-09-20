#!/usr/bin/php
<?php
/**
 * ##### Listing of files and file media types #####
 **/
// human readable file size function
$dir = ".";
function human_filesize($size, $precision = 2)
{
    for ($i = 0;
         ($size / 1024) > 0.9;
         $i++, $size /= 1024) {
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
// jedes element von $files wird jedes mal in $file getan
foreach ($files as $file) {
    // list all files if no filter
    if (is_dir("$dir/$file")) {
        continue;
    }
    if (empty($contenttype)) {
        //   if (mime_content_type($file==dir))
        echo $file . " " . human_filesize(filesize($dir . "/" . $file)) . " " .
            mime_content_type($dir . "/" . $file) . "\n";
        continue;
    }
    $test = mime_content_type($dir . "/" . $file);
    if (strpos($test, $contenttype) === 0) {
        echo $file . "\n";
    }
}
