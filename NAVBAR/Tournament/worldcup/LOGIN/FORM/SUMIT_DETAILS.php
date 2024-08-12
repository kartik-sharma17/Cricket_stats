
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
        $total_odi = $_POST['total_matches_odi'];
        $obs_odiwin = $_POST['obs_wins_odi'];
        $smsj_odiwin = $_POST['smsj_wins_odi'];
        $_odidraw = $_POST['draw_odi'];
        $totalchess = $_POST['total_matches_chess'];
        $obschesswin = $_POST['obs_wins_chess'];
        $smsjchesswin = $_POST['smsj_wins_chess'];
        $chessdraw  = $_POST['draw_chess'];

       
        // $sql = "INSERT INTO `form_details`.`odi`(`season`, `season_start_date`, `season_end_date`, `total_matches_odi`, `obs_odi_wins`, `smsj_odi_wins`, `odi_draws`, `total_chess_matches`, `obs_chess_wins`, `smsj_chess_wins`, `chess_draws`) VALUES ('$seasonnumber','$seasonstartingdata','$seasonendingdata','$total_odi','$obs_odiwin','$smsj_odiwin','$_odidraw','$totalchess','$obschesswin','$smsjchesswin','$chessdraw');";
        $sql = "INSERT INTO `if0_36067277_matches`.`odi`(`season`, `season_start_date`, `season_end_date`, `total_matches_odi`, `obs_odi_wins`, `smsj_odi_wins`, `odi_draws`, `total_chess_matches`, `obs_chess_wins`, `smsj_chess_wins`, `chess_draws`) VALUES ('$seasonnumber','$seasonstartingdata','$seasonendingdata','$total_odi','$obs_odiwin','$smsj_odiwin','$_odidraw','$totalchess','$obschesswin','$smsjchesswin','$chessdraw');";


        
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