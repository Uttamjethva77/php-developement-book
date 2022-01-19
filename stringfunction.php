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
        $str="Welcome Uttam";
        $str1="Welcome Uttam Enjoy;";
        echo strtolower($str);
        echo "<BR>";
        echo strtoupper($str);
        echo "<BR>";
        echo strlen($str);
        echo "<BR>";
        echo ltrim($str);
        echo "<BR>";
        echo substr($str,4);
        echo "<BR>";
        echo substr($str,-3,1);
        echo "<BR>";
        echo substr($str,3,7);
        echo "<BR>";
        if ($str==$str1)
        {
            echo "hiii";
        }
        else
        {
            echo "nooo";
        }
        echo "<BR>";
        echo strpos($str , m);
        echo "<BR>";
        echo strrpos($str, m);
        echo "<BR>";
        ?>
    </body>
</html>