<?php
    session_start();
?>
<html>
    <head>
        <title>session</title>
    </head>
    <body>
        <?php
            $data = gd_info();
            echo $data;
            echo "<br>";
            if ($img =@getImageSize(https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__340.jpg))
            {
                echo "image exist";
            }
            else
            {
                echo "image does not exist";
            }
        ?>
    </body>
</html>