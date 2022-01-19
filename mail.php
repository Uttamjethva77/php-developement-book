<html>
    <head>
        <title>
        my first php page
        </title>
    </head>
    <body>
        <?php
        echo "welcome to php";
        echo "<BR>";
        $to ="kapiljethva77@gmail.com";
        $subject = "testing";
        $message="<html>
        <head>
        
        ";
        mail($to, $subject, $message);
        ?>
    </body>
</html>