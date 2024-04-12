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
                        <td> <?php echo $rows['total t20 matches']?></td>
                        <td> <?php echo $rows['obs t20 wins']?></td>
                        <td> <?php echo $rows['smsj t20 wins']?></td>
                        <td> <?php echo $rows['t20 draws']?></td>
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
                        <td> <?php echo $rows['total test matches']?></td>
                        <td> <?php echo $rows['obs test wins']?></td>
                        <td> <?php echo $rows['smsj test wins']?></td>
                        <td> <?php echo $rows['test draws']?></td>
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
                        <td> <?php echo $rows['total chess matches']?></td>
                        <td> <?php echo $rows['obs chess wins']?></td>
                        <td> <?php echo $rows['smsj chess wins']?></td>
                        <td> <?php echo $rows['chess draws']?></td>
                    <?php
                    
                    }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>