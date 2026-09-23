<?php


function  input_error(string|null $key)
{
    if (isset($key)) {
        echo "<span class='text-red-500'>{$key}</span>";
    }
}
