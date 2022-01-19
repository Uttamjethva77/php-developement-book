<?php
    session_start();
?>
<html>
    <head>
        <title>session</title>
    </head>
    <body>
        <?php
        $sid=session_id();
        echo $sid ."<br>";
        $_SESSION['username']="uttam";
        $_SESSION['type']="admin";
        echo "session data stored";
        echo "<a href=viewsession.php>click to view session data</a>";
        ?>
    </body>
</html>