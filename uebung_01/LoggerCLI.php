<?php
// require_once "ImageFile.php";
include "ImageFile.php";
include "Colors.php";

class LoggerCLI
{

    public function print_($dir, $file) {
        $colors = new Colors();
        $ImageFile_foo = new Imagefile($dir, $file);
        $yay = $file;
        echo $colors->getColoredString("$yay", colors::FILE_NAME)." ";
        $yay_2 = $ImageFile_foo->getFilesizeHuman($ImageFile_foo->getFilesize($dir . "/" . $file));
        echo $colors->getColoredString("$yay_2", colors::FILE_SIZE)." ";
        $yay_3 = $ImageFile_foo->getContentType($dir . "/" . $file);
        echo $colors->getColoredString("$yay_3",colors::FILE_TYPE)." ";
        $yay_4 = $ImageFile_foo->getOwner($dir . "/" . $file);
        echo $colors->getColoredString("$yay_4",colors::FILE_USER)."\n";
    }
}
