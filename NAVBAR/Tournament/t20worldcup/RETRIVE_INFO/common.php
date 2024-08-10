<?php
if (isset($_GET['i'])) {
    $season = $_GET['i'];
}
?>
<?php

require_once('config.php');
$query = "SELECT * FROM `t20` WHERE season = $season;";
$result1 = mysqli_query($con, $query);
$result2 = mysqli_query($con, $query);
$result3 = mysqli_query($con, $query);
$result4 = mysqli_query($con, $query);

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
    <!-- for dates table -->
    <table>
        <thead>
            <tr>
                <th class="first_th">Season Starting Date</th>
                <th class="last_th">Season Ending Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($rows = mysqli_fetch_assoc($result4)) {
                ?>
                    <td> <?php echo $rows["season_start_date"] ?></td>
                    <td> <?php echo $rows["season_end_date"] ?></td>
                <?php
                }
                ?>
            </tr>
        </tbody>
    </table>

    <!-- for t20 table -->
    <table>
        <thead>
            <tr>
                <th class="first_th"> Total T20 Matches</th>
                <th> OBS T20 Wins</th>
                <th> SMSJ T20 Wins </th>
                <th class="last_th"> T20 Draws</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($rows = mysqli_fetch_assoc($result1)) {
                    $t20totalmatches = $rows['total_matches'];
                    $obst20 = $rows['obs_t20_wins'];
                    $smsjt20 = $rows['smsj_t20_wins'];
                    $t20draws = $rows['t20_draws'];
                ?>
                    <td> <?php echo $rows['total_matches'] ?></td>
                    <td> <?php echo $rows['obs_t20_wins'] ?></td>
                    <td> <?php echo $rows['smsj_t20_wins'] ?></t20>
                    <td> <?php echo $rows['t20_draws'] ?></td>
                <?php
                }
                ?>
            </tr>
        </tbody>
    </table>

  
    <!-- for mini table -->
    <table>
        <thead>
            <tr>
                <th class="first_th"> Total Mini Matches </th>
                <th> OBS Mini Wins </th>
                <th> SMSJ Mini Wins </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($rows = mysqli_fetch_assoc($result3)) {
                    $chesstotalmatches = $rows['total_mini_game'];
                    $obschess = $rows['obs_mini_wins'];
                    $smsjchess = $rows['smsj_mini_wins'];
                ?>
                    <td> <?php echo $rows['total_mini_game'] ?></td>
                    <td> <?php echo $rows['obs_mini_wins'] ?></td>
                    <td> <?php echo $rows['smsj_mini_wins'] ?></td>
                <?php

                }
                ?>
            </tr>
        </tbody>
    </table>

    <!-- for points -->
    <?php
    $totaldraw = $t20draws ;
    $totalobs =($obst20 + $obschess) * 2 + $totaldraw;
    $totalsmsj =($smsjt20 + $smsjchess) * 2 + $totaldraw;
    ?>
    <table>
        <thead>
            <tr>
                <th class="first_th">Obs Total Points</th>
                <th class="last_th">Smsj Total Points</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo ($obst20 +  $obschess) * 2 + $totaldraw ?></td>
                <td> <?php echo ($smsjt20 + $smsjchess) * 2 + $totaldraw ?></td>
            </tr>
        </tbody>
    </table>
    
    <!-- for winner table -->
    <table>
        <thead>
            <tr>
                <th class="first_th">Winner</th>
                <th class="last_th">By points</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="winner"> <?php if($totalobs > $totalsmsj){ echo "OBS";}
                 elseif($totalsmsj > $totalobs){ echo "SMSJ";} 
                 else {echo "draw";} ?></td>
                <td> <?php if($totalobs > $totalsmsj){ echo $totalobs - $totalsmsj;}
                 elseif($totalsmsj > $totalobs){ echo $totalsmsj - $totalobs;} 
                 else {echo "equal";} ?> </td>
            </tr>
        </tbody>
    </table>

    <!-- for stats table  -->
    <table class="lasttable">
        <thead>
            <tr>
                <th class="first_th">Obs T20 win percentage</th>
                <th >Smsj T20 win percentage</th>
                <th >Obs Mini win percentage</th>
                <th class="last_th">Smsj Mini win percentage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo ($obst20 / $t20totalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($smsjt20 / $t20totalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($obschess / $chesstotalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($smsjchess / $chesstotalmatches ) * 100 ."%"?></td>
                
            </tr>
        </tbody>
    </table>
    <a href="#"><button> Edit </button></a>
</body>
</html>     