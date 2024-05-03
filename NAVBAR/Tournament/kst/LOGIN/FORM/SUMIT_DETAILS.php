
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succesful</title>
</head>
<body>
    <?php
        $servername ='sql211.infinityfree.com';
        $password = 'Kartikbhai123';
        $username = 'if0_36067277';

        // $servername ='localhost';
        // $password = '';
        // $username = 'root';

        $conn = mysqli_connect($servername ,$username ,$password);

        if(! $conn){
            die("connection failed :". mysqli_connect_error());
        }
        echo "successfully connected";

        $seasonnumber = $_POST['season_number'];
        $seasonstartingdata = $_POST['starting_data'];
        $seasonendingdata = $_POST['Ending_data'];
        $totalt20 = $_POST['total_matches_t20'];
        $obswint20 = $_POST['obs_wins_t20'];
        $smsjwinst20 = $_POST['smsj_wins_t20'];
        $t20draw = $_POST['draw_t20'];
        $totaltest = $_POST['total_matches_test'];
        $obstestwin = $_POST['obs_wins_test'];
        $smsjtestwin = $_POST['smsj_wins_test'];
        $testdraw = $_POST['draw_test'];
        $totalchess = $_POST['total_matches_chess'];
        $obschesswin = $_POST['obs_wins_chess'];
        $smsjchesswin = $_POST['smsj_wins_chess'];
        $chessdraw  = $_POST['draw_chess'];

        $sql = "INSERT INTO `if0_36067277_matches`.`kst_details` (`dt`, `season_number`, `season starting data`, `season ending data`, `Total T20 Matches`, `T20 Obs Wins`, `T20 smsj Wins`, `T20 Draws`, `Total_Test_Matches`, `Test Obs Wins`, `Test_Smsj_Wins`, `Test Draws`, `Total Chess Matches`, `Chess Obs Wins`, `Chess Smsj Wins`, `chess draw`) VALUES (current_timestamp(), '$seasonnumber', '$seasonstartingdata', '$seasonendingdata', '$totalt20', '$obswint20', '$smsjwinst20', '$t20draw', '$totaltest', '$obstestwin', '$smsjtestwin', '$testdraw', '$totalchess', '$obschesswin', '$smsjchesswin', '$chessdraw')";
        // $sql = "INSERT INTO `form_details`.`kst_details` (`td`, `season_number`, `season starting data`, `season ending data`, `total t20 matches`, `obs t20 wins`, `smsj t20 wins`, `t20 draws`, `total test matches`, `obs test wins`, `smsj test wins`, `test draws`, `total chess matches`, `obs chess wins`, `smsj chess wins`, `chess draws`) VALUES (current_timestamp(), '$seasonnumber', '$seasonstartingdata', '$seasonendingdata', '$totalt20', '$obswint20', '$smsjwinst20', '$t20draw', '$totaltest', '$obstestwin', '$smsjtestwin', '$testdraw', '$totalchess', '$obschesswin', '$smsjchesswin', '$chessdraw')";

        
        echo $sql;
        
        if($conn->query($sql) == true){
            echo "data is succesfully inserted";
        }
        else{
            echo "data is not inserted error =",$conn->error;
        }
    ?>
</body>
</html>