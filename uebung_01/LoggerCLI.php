<?php
/**
 * Created by IntelliJ IDEA.
 * User: daniel
 * Date: 20.09.18
 * Time: 14:33
 */

class LoggerCLI
{
    public function print_($file, $dir) {
        echo $file . " " . human_filesize(filesize($dir . "/" . $file)) . " " .
            mime_content_type($dir . "/" . $file) . "\n";
    }


        public function zZzZzZzZz($newPath) {
$this->Path = $newPath;
echo "stuff";
    }



}
