<?php

class Colors
{
    const FILE_NAME = "0;37";
    const FILE_SIZE = "1;32";
    const FILE_TYPE = "0;93";
    const FILE_USER = "0;34";

    // Returns colored string
    public function getColoredString($string, $color)
    {
        $lored_string = "";
        // Check if given foreground color found

        $colored_string .= "\033[" . $color . "m";

        // Add string and end coloring
        $colored_string .= $string . "\033[0m";

        return $colored_string;
    }
}
