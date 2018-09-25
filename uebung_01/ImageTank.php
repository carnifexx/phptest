<?php

//var $file_anzahl = scandir($dir);
class ImageTank
{
//$file_anzahl = scandir($dir);
    function getImages()
    {
        $file_anzahl = scandir($dir);
        $arr_foo = array();

        for ($i = 1; $i <= $file_anzahl; $i++) {
            $arr_foo [$i] = new ImageFile(dir, file);
        }
    }

    function getImages_2()
    {
        foreach ($ImageFile as $key_foo => $wert) {
            echo '<p>' . $key_foo . ': ' . $wert . '</p>';
        }
    }
}
// }
