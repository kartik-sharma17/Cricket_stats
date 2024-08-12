
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
        $total_mini = $_POST['total_matches_mini'];
        $obs_mini_win = $_POST['obs_wins_mini'];
        $smsj_mini_win = $_POST['smsj_wins_mini'];

        
       
        // $sql ="INSERT INTO `form_details`.`t20`(`season`, `season_start_date`, `season_end_date`, `total_matches`, `obs_t20_wins`, `smsj_t20_wins`, `t20_draws`, `total_mini_game`, `obs_mini_wins`, `smsj_mini_wins`) VALUES ('$seasonnumber','$seasonstartingdata','$seasonendingdata','$totalt20','$obswint20','$smsjwinst20','$t20draw','$total_mini','$obs_mini_win','$smsj_mini_win');";
        $sql ="INSERT INTO `if0_36067277_matches`.`t20`(`season`, `season_start_date`, `season_end_date`, `total_matches`, `obs_t20_wins`, `smsj_t20_wins`, `t20_draws`, `total_mini_game`, `obs_mini_wins`, `smsj_mini_wins`) VALUES ('$seasonnumber','$seasonstartingdata','$seasonendingdata','$totalt20','$obswint20','$smsjwinst20','$t20draw','$total_mini','$obs_mini_win','$smsj_mini_win');";

        
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