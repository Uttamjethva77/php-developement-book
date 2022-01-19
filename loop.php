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
        $n=1;
        while($n<=10)
        {
            echo $n;
            echo "<BR>";
            $n++;
        }
        print "<BR>";
        $n=1;
        while($n<=12)
        {
            print "$n times 2 is".($n*2)."<br>";
            $n++;
        }
        print "<BR>";
        $n=1;
        do
        {
            echo $n;
            echo "<BR>";
            $n++;
        }
        while($n<=10);
        print "<BR>";
        print "<BR>";
        for ($n=1;$n<=10;$n++)
        {
            echo "<BR>";
            echo $n;
        }
        print "<BR>";
        echo "<table border=1 width=100% height=100%>";
        for($a=1;$a<=10;$a++)
        {
            echo "<tr>";
            for($b=1;$b<=10;$b++)
            {
                if(a%2!=0 && b%2!=0 || $a==$b)
                echo "<td bgcolor=BLACK> </td>";
                else if (a%2==0 && b%2==0 )
                echo "<td bgcolor=PINK> </td>";
                else 
                echo "<td bgcolor=WHITE> </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        
    </body>
</html>