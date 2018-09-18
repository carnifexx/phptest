#!/usr/bin/php
<?php
//define('APACHE_MIME_TYPES_URL','http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types');
if (count($argv) <= 1) {
    $dir = ".";
} else {
    $dir = $argv[1];
}
$files = scandir($dir);
foreach ($files as $file) {
   /* if (!is_dir("$dir/$file")) {*/
        echo $file . " " . filesize($dir . "/" . $file) . " " .
            mime_content_type($dir . "/" . $file) . "\n";
   // }
}
?>