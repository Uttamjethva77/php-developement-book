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
        $month=2;
        switch($month)
        {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                echo "31 days in month";
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                echo "30 days in month";
                break;
            case 2:
                echo "28/29 days in month";
                break;
            default:
                echo "invaild month";
        }
        print "<BR>";
        $dateinfo = getdate();
        $wday = $dateinfo["wday"];
        $weekday = $dateInfo["weekday"];
        $openhours = "open";
        echo "today is $weekday";
        switch ($weekday)
        {
            case "monday":
            case "tuesday":
            case "wednesday":
            case "thrusday":
            case "friday":
                $openhours = "open from 9 am to 9 pm";
                break;
            case "saturday":
                $openhours = "open from 9 am to 5 pm";
                break;
            case "sunday":
                $openhours = "closed";
                break;
            default:
                $openhours = "not at there";
        }
        echo "the library is $openhours"
        ?>
        
    </body>
</html>