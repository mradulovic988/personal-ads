<?php
/**
 * Functions class
 */

class Functions
{
    public $path;

    public function absPath($path)
    {
        return realpath($this->path);
    }
}

$function = new Functions();