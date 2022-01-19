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
        $name=$_POST['NAME'];
        echo "heloo,";
        echo "<BR>";
        $password=$_POST['PASSWORD'];
        echo "<BR>";
        if ($name="kapilbhai" and $password="9974715012")
        {
            echo "welcome mr. kapil jethva";
        }
        else
        {
            
            echo "you are using wrong id and passwords";
        }
        echo "<BR>";
        $age=$_POST['AGE'];
        if ($name="kapilbhai" and $password="9974715012")
        {
            echo "age=$age";
        }
        else
        {
            
            echo "";
        }
        echo "<BR>";
        ?>
        
    </body>
</html>