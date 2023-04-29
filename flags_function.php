<?php
    //Not Good
    function createFile(string $name, bool $temp = false): void
    {
        if ($temp) {
            touch('./temp/' . $name);
        } else {
            touch($name);
        }
    }

    //Good
    function createFile(string $name): void
    {
        touch($name);
    }

    function createTempFile(string $name): void
    {
        touch('./temp/' . $name);
    }
?>