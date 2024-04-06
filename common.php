<?php
    if(isset($_GET['i'])){
        $season = $_GET['i'];
    }
    ?>
<?php

require_once('config.php');
$query = "SELECT * FROM `kst_details` WHERE season_number = $season;";
$result1 = mysqli_query($con, $query);
$result2 = mysqli_query($con, $query);
$result3 = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Season Details</title>
    <link rel="stylesheet" href="common.css">
    
</head>
<body>
    <div class="t20_table table">
        <table>
            <tr>
                <td> Total T20 Matches </td>
                <td> OBS T20 Wins</td>
                <td> SMSJ T20 Wins </td>
                <td> T20 Draws</td>
            </tr>
            <tr>
                <?php
                    while($rows = mysqli_fetch_assoc($result1)){
                    ?>
                        <td> <?php echo $rows['Total T20 Matches']?></td>
                        <td> <?php echo $rows['T20 Obs Wins']?></td>
                        <td> <?php echo $rows['T20 smsj Wins']?></td>
                        <td> <?php echo $rows['T20 Draws']?></td>
                    <?php
                    }
                ?>
            </tr>
        </table>
    </div>
    <div class="test_table table">
        <table>
            <tr>
                <td> Total Test Matches </td>
                <td> OBS Test Wins </td>
                <td> SMSJ Test Wins </td>
                <td> Test Draws </td>
            </tr>
            <tr>
                <?php
                    while($rows = mysqli_fetch_assoc($result2)){
                    ?>
                        <td> <?php echo $rows['Total_Test_Matches']?></td>
                        <td> <?php echo $rows['Test Obs Wins']?></td>
                        <td> <?php echo $rows['Test_Smsj_Wins']?></td>
                        <td> <?php echo $rows['Test Draws']?></td>
                    <?php
                    }
                ?>
            </tr>
        </table>
    </div>
    <div class="chess_table table">
        <table>
            <tr>
                <td> Total Chess Matches </td>
                <td> OBS Chess Wins </td>
                <td> SMSJ Chess Wins </td>
                <td> Chess Draws </td>
            </tr>
            <tr>
                <?php
                    while($rows = mysqli_fetch_assoc($result3)){
                    ?>
                        <td> <?php echo $rows['Total Chess Matches']?></td>
                        <td> <?php echo $rows['Chess Obs Wins']?></td>
                        <td> <?php echo $rows['Chess Smsj Wins']?></td>
                        <td> <?php echo $rows['chess draw']?></td>
                    <?php
                    
                    }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>