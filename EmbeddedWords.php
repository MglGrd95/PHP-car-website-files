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
         <h1>Embeded Words</h1>
        
        <?php
            $phrases = array("Your choice of vehicle can  tell a lot about your  personality.", 
            "Embeded PHP scripts within an HTML document.");

            $signNames = array("Rat", "Ox", "Tiger", "Rabbit", "Rabbit", "Dragon", "Snake", "Horse",
            "Goat", "Monkey", "Rooster", "Dog", "Pig");

            function buildLetterCounts($text) {
                $text = strtoupper($text);
                $letter_counts = count_chars($text);
                return $letter_counts;
            }

            function AContainsB($A, $B) {
                $retval = TRUE;
                $first_letter_index = ord('A');
                $last_letter_index = ord('Z');
                for ($letter_index = $first_letter_index;
                $letter_index <= $last_letter_index;
                ++$letter_index) {
                    if ($A[$letter_index] < $B[$letter_index]) {
                        $retval = False;
                    }
                }
                return $retval;
            }

            foreach ($phrases as $phrase) {
                $phraseArray = buildLetterCounts($phrase);
                $goodWords = array();
                $badWords = array();
                        }

            foreach ($signNames as $word) {
                $wordArray = buildLetterCounts($word);
                if (AContainsB($phraseArray, $wordArray))
                    $goodWords[] = $word;
                else
                    $badWords[] = $word;
            }

            echo "<p>The following words can be made from the letters in the phrase
                &quot; $phrase&quot;:";
                
            foreach ($goodWords as $word)
                echo " $word";
            echo "</p>\n";
            echo "hr />\n";
        ?>
    </body>
</html>