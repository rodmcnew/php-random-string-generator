<?php

/**
 * Random String Generator Demo
 *
 * @author    Rod Mcnew
 * @license   License.txt New BSD License
 */

include 'RandomStringGenerator.php';
$generator = new RandomStringGenerator();
for ($i = 1; $i <= 100; $i++) {
    echo $generator->generateRandomString(6) . "<br>\n";
}