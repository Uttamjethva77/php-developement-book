<html>
    <head>
        <title>
        my first php page
        </title>
    </head>
    <body>
        <?php
        echo "welcome to php";
        print "<BR>";
        $a=20;
        $b=10;
        $c=$a+$b;
        echo "addition is $c";
        print "<BR>";
        $c=$a-$b;
        echo "substraction is $c";
        print "<BR>";
        $c=$a*$b;
        echo "multiplication is $c";
        print "<BR>";
        $c=$a/$b;
        echo "division is $c";
        print "<BR>";
        $c=$a%$b;
        echo "module is $c";
        print "<BR>";
        if($a==$b)
        {
            echo "<BR> Both are equal";
        }
        else
        {
            echo "<BR> Both are not equal";
        }
        if($a<$b)
        {
            echo "<BR> $a is < $b";
        }
        else
        {
            echo "<BR> $a is > $b";
        }
        print "<BR>";
        $c=30;
        if($a>$b && $a>$c)
        {
            echo "<BR> $a is maximum";
        }
        else if ($b>$a && $b>$c)
        {
            echo "<BR> $b is maximum";
        }
        else
        {
            echo "$c is maximum";
        }
        print "<BR>";
        ($a>$b) ? $c="$a is greater": $c="$b is Greater";
        echo $c;
        print "<BR>";
        $a = "uttam";
        $b = $a . "jethva";
        echo "$b";
        print "<BR>";
        ?>
    </body>
</html>