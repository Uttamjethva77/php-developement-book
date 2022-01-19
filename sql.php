<html>
    <head>
        <title>
            user fetching
        </title>
    </head>
    <body>
        <?php
            $hostname = 'localhost';
            $username = 'wincrics';
            $password = 'k3ood0]]B33JYB';
            $db_name = 'wincrics_wp246';

            $conn = mysqli_connect($hostname, $username, $password, $db_name) or die(mysqli_error($conn));
            
            $sql =mysqli_query($conn, "select * from users");
            ?>
            <center>
            <table width="1000" border="1">
                <tr>
                    <td width="100"> id</td>
                    <td width="450"> users name</td>
                    <td width="450"> email</td>
                </tr>
                <tr>
                    <td width="100"> <?php $sql =mysqli_query($conn, "select * from users");
                    while ($retval = mysqli_fetch_array($sql))
                    
            {
                
                echo $retval['id'],"<br>";
            }?></td>
                    <td width="450"> <?php $sql =mysqli_query($conn, "select * from users");
                    while ($retval = mysqli_fetch_array($sql))
                    
            {
                
                echo $retval['full_name'],"<br>";
            }?></td>
                    <td width="450"> <?php 
                    $sql =mysqli_query($conn, "select * from users");
                    while ($retval = mysqli_fetch_array($sql))
                    
            {
                
                echo $retval['email'],"<br>";
            }?></td>
            
            </tr>
                
            </table>
            </center>
            <form method="post" action="search.php">
                enter email<input type="text" name="email"><br>
                <input type="submit" value="Click"><br>
            </form>
            <form method="post" action="insert.php">
                fullname<input type="text" name="fullname"><br>
                email<input type="text" name="email"><br>
                <input type="submit" value="ADD"><br>
            </form>
            <form name="form1">
                <select name="no" onChange="print.it(this.value)">
                <?php
                    $rs=mysqli_query("select * from users") or die(mysqli_error());
                    while($row=mysql_fetch_array($rs))
                    {
                        echo "<option value=$row[0]>$row[1]";
                    }
                ?>
                </select>
            </form>
            <div id="texthint"></div>
    
            <?php
            
            $sql = mysqli_query($conn, "create table tutorials (column1 int );");
            if(! $sql)
            {
                die('table not created' . mysqli_error($conn));
            }
            echo "table created sucssessfully";
            echo "<br>";
            $sql = mysqli_query($conn, "drop table tutorials");
            if(! $sql)
            {
                die('table not dropped' . mysqli_error($conn));
            }
            echo "table dropped sucssessfully";
            echo "<br>";
            $sql = mysqli_query($conn, "INSERT INTO users (full_name, email) 
                                        VALUES 
                                        ('devansh indrodiya', 'd@123gmail.com.com')");
            if(! $sql)
            {
                die('line not inserted' . mysqli_error($conn));
            }
            echo "line inserted sucssessfully";
        ?>
        
        </body>
</html>

