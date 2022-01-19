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
        ?>
        <FORM ACTION ="someform.php" METHOD="GET">
            Name : <INPUT TYPE="TEXT" NAME="NAME" /><BR/>
            Password : <INPUT TYPE="PASSWORD" NAME="PASSWORD" /><BR/>
            Age : <INPUT TYPE="TEXT" NAME="AGE" /><BR/>
            <INPUT TYPE="submit"/>
        </FORM>
    </body>
</html>