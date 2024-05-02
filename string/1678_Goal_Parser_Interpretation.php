<?php

class Solution
{

    /**
     * @param String $command
     * @return String
     */
    function interpret($command)
    {
        return str_replace(['()', '(', ')'], ['o', '', ''], $command);
    }
}

$command = "(al)G(al)()()G";
$obj = new Solution();
echo $obj->interpret($command);