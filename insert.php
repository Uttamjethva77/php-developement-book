<html>
    <head>
        <title>
            insert record
        </title>
        <body>
            <?php
            $hostname = 'localhost';
            $username = 'wincrics';
            $password = 'k3ood0]]B33JYB';
            $db_name = 'wincrics_wp246';
            
            $conn = mysqli_connect($hostname, $username, $password, $db_name) or die(mysqli_error($conn));
            extract($_POST);
            $rs=mysqli_query($conn,"select full_name from users where full_name='$fullname'") or die(mysqli_error($conn));
            if(mysqli_num_rows($rs)>=1)
            {
                echo "name already exist";
                exit();
            }
            mysqli_query($conn, "insert into users(full_name,email)
                                values
                                ('$fullname', '$email')") or die(mysqli_error($conn));
            echo "record insrted";
            mysqli_close($conn);
            ?>
        </body>
    </head>
</html>