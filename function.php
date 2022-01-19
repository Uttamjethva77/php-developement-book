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
        function uttam()
        {
            echo "<h1> hello from uttam function";
            echo "<BR>";
        }
        uttam();
        echo "<BR>";
        function uttamN($msg)
        {
            echo $msg;
            echo "<BR>";
        }
        uttamN("this is uttam");
        uttamN("you can leave your msg here");
        // global variable
        $msg = "hello users";
        function ring()
        {
            global $msg;
            echo $msg;
        }
        ring(); 
        echo "<BR>";
        echo $msg;
        // by reference
        function addno($no)
        {
            $no=$no+10;
            echo $no;
        }
        $no=20;
        addno($no);
        
        ?>
    </body>
</html>