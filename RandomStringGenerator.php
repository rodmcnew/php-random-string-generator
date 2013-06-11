<?php

/**
 * Random String Generator
 *
 * Generates random strings consisting of numbers and uppercase letters
 *
 * @author    Rod Mcnew
 * @license   License.txt New BSD License
 */
class RandomStringGenerator
{
    /**
     * Generates random strings consisting of numbers and uppercase letters
     */
    function generateRandomString(
        $length,
        $allowedCharacters = '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ'//No 0's or O's
    )
    {
        $maxIndex = strlen($allowedCharacters) - 1;
        $string = '';
        for ($i = 1; $i <= $length; $i++) {
            $string .= $allowedCharacters[mt_rand(0, $maxIndex)];
        }
        return $string;
    }

}