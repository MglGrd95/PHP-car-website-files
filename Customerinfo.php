<!Doctype html>
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
            <h2 style="text-align:center">Customer Sign-Up</h2>
        <div class="form">
            <form name="customer Sign Up" method = "POST" action = "process_Customerinfo.php"
                 style="text-align:left">
                <p>First Name: <input type="text" name="fname"maxlength="25"/></p>
                <p>LastName: <input type="text" name="lname" maxlength="25"/></p>
                <p>Address: <input type="text" name="address" maxlength="25"/></p>
                <p>City: <input type="text" name="city" maxlength="35"/></p>
                <p>Zip: <input type="text" name="zip" maxlength="5"/></p>
                <p>State: <input type="text" name="state" maxlength="2"/></p>
                <p>Phone: <input type="numbers" name="phone" maxlength="10"/></p>
                <p>Email: <input type="text" name="email" maxlength="25"/></p>
                <p>Contact Preference:  Email<input type="checkbox" name="prefcntc"/>
                   Phone<input type="checkbox" name="prefcntc"/></p>
                <p>Birhtdate: <input type="text" name="bdate"/></p>
                <p>What the Contact is about: <textarea name="comment" 
                    rows="3" cols="30" maxlength="1000"></textarea></p>
                <p><input type="reset" value="Clear Form" />
                <input type="submit" name="Submit" value="Send Form"/></p>
            </form>
        </div>
        <?php
            $errorCount = 0;

           function displayRequired($fieldName) {
               echo "The field \"$fieldName\" is required.<br />";
           }
           function validateInput($data, $fieldName) {
               global $errorCount;
               if (empty($data)) {
                   displayRequired($fieldName);
                   ++$errorCount;
                   $retval = "";
               } else { 
                   $retval = trim($data);
                   $retval = stripslashes($retval);
               }
               return($retval);
           }

           function validateYear($data, $fieldName) {
               global $errorCount;
               if (empty($data)) {
                   echo "<p>The field $fieldName is requiered.</p>";
                   ++$errorCount;
                   $retval = "";
               } else {
                   $data = trim($data);
                   $data = stripslashe($data);
                   if (is_numeric($data)) {
                       $data = round($data);
                       if ($data >= 2005) {
                           $retval = $data;
                       } else {
                           echo "<p>You must be 18 or older.</p>";
                                    ++$errorCount;
                                    $retval = "";
                       }
                   }
                   return($retval);
               }
           }
        ?>
    </body>
</html>