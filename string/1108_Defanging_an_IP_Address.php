<?php

class Solution
{

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address)
    {
        $string = "";
        for ($i = 0; $i < strlen($address); $i++) {
            if ($address[$i] == '.') {
                $string .= "[" . $address[$i] . "]";
            } else {
                $string .= $address[$i];
            }
        }
        return $string;
    }
}

$obj = new Solution();
$address = "255.100.50.0";
print_r($obj->defangIPaddr($address));