<?php

class SubrectangleQueries
{
    public $rectangle;

    /**
     * @param Integer[][] $rectangle
     */
    function __construct($rectangle)
    {
        $this->rectangle = $rectangle;
    }

    /**
     * @param Integer $row1
     * @param Integer $col1
     * @param Integer $row2
     * @param Integer $col2
     * @param Integer $newValue
     * @return NULL
     */
    function updateSubrectangle($row1, $col1, $row2, $col2, $newValue)
    {
        $rectangle = $this->rectangle;
        for ($i = $row1; $i <= $row2; $i++) {
            for ($j = $col1; $j <= $col2; $j++) {
                $rectangle[$i][$j] = $newValue;
            }
        }
        $this->rectangle = $rectangle;
    }

    /**
     * @param Integer $row
     * @param Integer $col
     * @return Integer
     */
    function getValue($row, $col)
    {
        return $this->rectangle[$row][$col];
    }
}

$rectangle = [
    [1, 2, 1],
    [4, 3, 4],
    [3, 2, 1],
    [1, 1, 1]
];

$obj = new SubrectangleQueries($rectangle);

$updataData = [0, 0, 3, 2, 5];
$obj->updateSubrectangle($updataData[0], $updataData[1], $updataData[2], $updataData[3], $updataData[4]);

$getValue = [0, 2];
echo $ret_2 = $obj->getValue($getValue[0], $getValue[1]);
echo "\n";

$getValue = [3, 1];
echo $ret_2 = $obj->getValue($getValue[0], $getValue[1]);
echo "\n";

$updataData = [3, 0, 3, 2, 10];
$obj->updateSubrectangle($updataData[0], $updataData[1], $updataData[2], $updataData[3], $updataData[4]);

$getValue = [0, 2];
echo $ret_2 = $obj->getValue($getValue[0], $getValue[1]);
echo "\n";


