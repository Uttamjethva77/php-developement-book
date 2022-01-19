<?php
    session_start();
?>
<html>
    <head>
        <title>session</title>
    </head>
    <body>
        <?php
            print_r($_SESSION);
            echo "user name is". $_SESSION['username'];
            echo "<br>";
            echo "user type is". $_SESSION['type'];
        ?>
    </body>
</html>