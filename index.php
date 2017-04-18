<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * Created by PhpStorm.
         * User: Greg
         * Date: 4/18/2017
         * Time: 3:06 PM
         */

        $str1 = "php";
        $str2 = "Your visual blueprint for web development.";
        $str3 = "Washington";
        $str4 = "Washin";

        /**
         * String handling function related "case"
         *
         * strtolower(str) - makes all characters in a string lower case
         * strtoloupper(str) - makes all characters in a string upper case
         *
         * ucfirst(str) - Makes the first letter in a string upper case
         * ucwords(str) - Makes the first letter of every word upper case
         */

        echo "<h3>$str1 and using ucfirst: " . ucfirst($str1) . " or using strtoupper: " . strtoupper($str1) . "</h3>\n";
        echo "<h3>$str2 with ucwords: " . ucwords($str2) . "</h3>\n";

        /**
         * String length or string comparison
         *
         * strlen(str) - Returns an integer of the number of characters in a string
         *
         * strcmp(str1,str2) - compares character by character starting from left to right, until it finds a difference.
         * Returns an integer result of
         * < (less then) 0 means str1 is less than str2
         * 0 means strings are equal
         * > 0 means that str1 is greater than str2
         */

        echo "<h3>The length of $str3 is " . strlen($str3) . " characters.</h3>\n";
        echo "<h3>The length of 1234.56 is " . strlen(1234.56) . " characters.</h3>\n";
        echo "<h3>The length of \"Green Bay Packers\" is " . strlen("\tGreen Bay Packers") . " characters</h3>\n";

        $result = strcmp($str1, $str3);

        echo "<h3>The result is $result</h3>\n";

        /**
         * String replacement
         *
         * substr(str, start pos, [length]) returns a string, specifically a string composed
         * of the characters specified by the start position and length
         */

        echo "<h3>". substr($str1, 1, 2) . "</h3>";
        echo "<h3>" . substr($str3, 3, -2) . "</h3>";

        /**
         * substr_replace($str, $replacement, start pos, [length])
         */

        $greeting = "Good morning citizen!";
        echo "<h3>$greeting</h3>\n";
        echo "<h3>" . substr_replace($greeting, "Bye!", 4, 8) . "</h3>\n";

        ?>
    </body>
</html>
