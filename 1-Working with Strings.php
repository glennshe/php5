<html>
<head>
<title>Beginning PHP5</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8559-1">
</head>
<body bgcolor="#FFFFFF">
    <table width="100%" border="1">
        <tr>
         <td width="49%"><font face="Arial, Helvetica, sans-serif"><b>Working with strings</b></font></td>
         <td width="51%"><font face="Arial, Helvetica, sans-serif"><b>&nbsp</b></font></td>

         <tr>   
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1">Using Concatenation - <b>the . operator</b></font></td>
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1"><b>
         <?php
            $first_name = "Joe";
            $last_name = "Blo";
            $whole_name = $first_name ." " . $last_name;
            echo "First name plus last name = <b>" . $whole_name . "</b>";
            ?>

         </b></font></td>
        </tr>
        <tr>   
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1">Finding String length - using <b>strlen()</b></font></td>
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1"><b>
         <?php
            $string_length = strlen($whole_name);
            echo "The length of the string is <b>" . $string_length . "</b>";
            ?>

         </b></font></td>
        </tr>
        <tr>   
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1">Getting part of a string - using <b>strstr()</b></font></td>
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1"><b>
         <?php
            $part_after_space = strstr($whole_name, " ");
            echo "The part of the string after the space is <b>" . $part_after_space . "</b>";
            ?>

         </b></font></td>
        </tr>
        <tr>   
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1">Finding position of part of a string using <b>strpos()</b></font></td>
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1"><b>
         <?php
            $letter_position = strpos($whole_name, "o");
            echo "The position of the letter &quot;o&quot; is <b>" . $letter_position . "</b>";
            ?>

         </b></font></td>
        </tr>
        <tr>   
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1">Return a character based in an ASCII value - using <b>chr()</b></font></td>
         <td width="51%"><font face="Arial, Helvetica, sans-serif" size="-1"><b>
         <?php
            $ascii_character_returned = chr(65);
            echo "The character corresponding to ASCII decimal valie 65 is <b>" . $ascii_character_returned . "</b>";
        
            ?>

         </font></td>
        </tr>


    </table>

    </body>
</html>
