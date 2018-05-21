<?php
    // check for errors and notify the user
    if (!empty($errors))
     foreach ($errors as $error) {
         echo "<div class=\"alert alert-danger\"><strong> Error! </strong>" . $error . "</div>";
     }
?>
