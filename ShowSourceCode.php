<!DOCTYPE html>
<html>
    <head>
        <meta charset="'UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="SamFord.css"/>
        <title>Sam Allen Ford</title>
        <!--
            Miguel Gerardo
            5/1/2022
            Lab 1_Spring2022_final-1
        -->
    </head>
    <body>
        <div class="header"><?php include("includes/inc_header.php"); ?></div>
			<div class="nav"><?php include("includes/inc_nav.php"); ?></div>

        <?php
            if (isset($_GET['source_file'])) {
                $SourceFile = file_get_contents(stripslashes($_GET['source_file']));
                highlight_string($SourceFile);
            }
            else {
                echo "<p>No source file specified. Nothing to display!</p>";
            }
        ?>
    </body>
</html>