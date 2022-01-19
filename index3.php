<html>
    <head>
        <title>
        my first php page
        </title>
    </head>
    <body>
        <?php
        $msg = "this is msg to you";
        $no1 = 25;
        $no2 = 25;
        echo $msg;
        $no3 = $no1 + $no2;
        echo "<BR>";
        echo $no3;
        echo "<BR>";
        $variable = "name";
        $literally = 'my $variable will not print!\\n';
        echo $literally;
        echo "<BR>";
        $literally = "my $variable will print!\\n";
        echo $literally;
        echo "<BR>";
        $testing; 
        print gettype($testing);
        print "<BR />";
        $testing = 15; 
        print gettype($testing);
        print "<BR>";
        $testing = "hiiii dear"; 
        print gettype($testing);
        print "<BR>";
        $testing1 = 50.0; 
        print gettype($testing1);
        print "<BR>";
        $testing = true; 
        print gettype($testing);
        print "<BR>";
        settype ($testing1, string);
        print gettype($testing1);
        print "<BR>";
        $myvar = 3.14;
        $myint = intval($myvar);
        echo $myint;
        print "<BR>";
        $mystr = strval($myvar);
        echo $mystr;
        print "<BR>";
        $a="";
        if (isset($a))
        { echo "variable a is defined";}
        else
        {echo "variable a is not defined";}
        print "<BR>";
        if (isset($b))
        { echo "variable a is defined";}
        else
        {echo "variable a is not defined";}
        print "<BR>";
        unset($a);
        if (isset($a))
        { echo "variable a is defined";}
        else
        {echo "variable a is not defined";}
        print "<BR>";
        define ("PI",3.14);
        define ("COMPANY", "Uttam infotech", true);
        echo PI;
        print "<BR>";
        echo COMPANY;
        print "<BR>";
        if (defined("PI"))
        {
            echo "costanat PI is defined";
        }
        else
        {
            echo "constant PI is not defined";
        }
        print "<BR>";
        $str="COMPANY";
        echo constant($str);
        print "<BR>";
        ?>
    </body>
</html>