<!DOCTYPE html>
<html>
    <head>
        <meta charset="'UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="SamFord.css"/>
        <title>Sam Allen Ford</title>
        <!--
            Miguel Gerardo
            4/18/2022
            Lab 1_Spring2022_final-1
        -->
    </head>
    <body>
         <h1>Similar Names</h1>
        
        <?php
            $signNames = array("Rat",
            "Ox",
            "Tiger",
            "Rabbit",
            "Dragon",
            "Snake",
            "Horse",
            "Goat",
            "Monkey",
            "Rooster",
            "Dog",
            "Pig");

            $lavenshteinSmallest = 999999;
            $similarTextLargest = 0;

            for ($i=0; $i<11; ++$i) {
                for ($j= $i+1; $j<12; ++$j) {
           $levenshteinValue = levenshtein($signNames[$i], $signNames[$j]);

           if ($levenshteinValue < $levenshteinSmallest) {
           $levenshteinSmallest = $levenshteinValue;
           $levenshteinWord1 = $signNames[$i];
           $levenshteinWord2 = $signNames[$j];
            }

           $similarTextValue = similar_text($signNames[$i], $signNames[$j]);

           if ($similarTextValue > $similarTextLargest) {
           $similarTextLargest = $similarTextValue;
           $similarTextWord1 = $signNames[$i]; 
           $similarTextWord2 = $signNames[$j];
            }
           }
               }

               echo "<p>The levenshtein() function has determined that 
               &quot;$levenshteinWord1 &quot; and &quot; $levenshteinWord2 &quot; are the 
               most similar names.</p>\n";
               echo "<p>The similar_text() function has determined that 
               &quot; $similarTextWord1 &quot; and &quot; $similarTextWord2 &quot; are the 
               most similar names.</p>\n";
        ?>
    </body>
</html>