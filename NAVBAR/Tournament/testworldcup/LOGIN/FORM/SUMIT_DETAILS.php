
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
        // echo "successfully connected";

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

     
        // $sql = "INSERT INTO `form_details`.`test`(`season`, `season_start_date`, `season_end_date`, `total_test_matches`, `obs_test_wins`, `smsj_test_wins`, `test_draws`, `total_t20_wins`, `obs_t20_wins`, `smsj_t20_wins`, `t20_draws`, `total_chess_matches`, `obs_chess_wins`, `smsj_chess_wins`, `chess_draws`) VALUES ('$seasonnumber','$seasonstartingdata','$seasonendingdata','$totaltest','$obstestwin','$smsjtestwin','$testdraw','$totalt20','$obswint20','$smsjwinst20','$t20draw','$totalchess','$obschesswin','$smsjchesswin','$chessdraw');";
        $sql = "INSERT INTO `if0_36067277_matches`.`test`(`season`, `season_start_date`, `season_end_date`, `total_test_matches`, `obs_test_wins`, `smsj_test_wins`, `test_draws`, `total_t20_wins`, `obs_t20_wins`, `smsj_t20_wins`, `t20_draws`, `total_chess_matches`, `obs_chess_wins`, `smsj_chess_wins`, `chess_draws`) VALUES ('$seasonnumber','$seasonstartingdata','$seasonendingdata','$totaltest','$obstestwin','$smsjtestwin','$testdraw','$totalt20','$obswint20','$smsjwinst20','$t20draw','$totalchess','$obschesswin','$smsjchesswin','$chessdraw');";

        
        // echo $sql;
        
        if($conn->query($sql) == true){
            echo "data is succesfully inserted";
        }
        else{
            echo "data is not inserted error =",$conn->error;
        }
    ?>
</body>
</html>