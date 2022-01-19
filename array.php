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
        $student_name=array("uttam","parth","ronak","d","arijit","mitesh");
        print_r($tudent_name);
        echo "<br> value of indexed 0 =".$student_name[0];
        for ($i=0;$i<5;$i++)
        {
            echo "<br>".$student_name[$i];
        }
        $emp = array (
            "name" => "uttam",
            "designation" => "programmer",
            "age" => "20",
            );
        echo "<br>".$emp['name'];
        echo "<br>";
        // multi dimension arrays
        $subject = array ("php", "java", "vb", "oracle");
        foreach ($subject as $uttam)
        {
            echo "$uttam<br/>";
        }
        ?>
        
    </body>
</html>