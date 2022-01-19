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
            $n=$_POST['email'];
            $rs=mysqli_query($conn,"select * from users 
                                    where 
                                    email='$n'") or die(mysqli_error($conn));
                                    
           
            $u=mysqli_fetch_array($rs);
          
            
                echo "name :=".$u['full_name'];
           
            mysqli_close($conn);
            ?>
        </body>
    </head>
</html>