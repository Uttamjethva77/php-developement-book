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
            ?>
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
            </body>
            </html>