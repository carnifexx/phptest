<?php

class ImageFile
{
    private $dir;
    private $file;

    function __construct($dir, $file)
    {
        $this->dir = $dir;
        $this->file = $file;
    }

    function getContentType()
    {
        return mime_content_type($this->dir . "/" . $this->file);
    }

    function getOwner() // Unix File Owner
    {

        $test= posix_getpwuid(fileowner($this->dir . "/" . $this->file));

        return $test['name'];

    }

    function getFilesize() // Filesize in Bytes
    {
        return filesize($this->dir . "/" . $this->file);
    }

    function getFilesizeHuman($size, $precision = 2) // human readable file size function
    {
        $i = 0;
        while (($size / 1024) > 0.9) {
            $i++;
            $size /= 1024;
        }
        return round($size, $precision) . ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'][$i];
    }
}
