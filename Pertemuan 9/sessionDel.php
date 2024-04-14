<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            session_unset();
            session_destroy();

            echo "All session variables are now removed, aand teh session is destroyed.";
        ?>
    </body>
</html>