<?php
if (isset($_GET['i'])) {
    $season = $_GET['i'];
}
?>
<?php

require_once('config.php');
$query = "SELECT * FROM `kst_details` WHERE season_number = $season;";
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
                    <td> <?php echo $rows["season starting data"] ?></td>
                    <td> <?php echo $rows["season ending data"] ?></td>
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
                <th class="first_th"> Total T20 Matches </th>
                <th> OBS T20 Wins</th>
                <th> SMSJ T20 Wins </th>
                <th class="last_th"> T20 Draws</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($rows = mysqli_fetch_assoc($result1)) {
                    $t20totalmatches = $rows['total t20 matches'];
                    $obst20 = $rows['obs t20 wins'];
                    $smsjt20 = $rows['smsj t20 wins'];
                    $t20draws = $rows['t20 draws'];
                ?>
                    <td> <?php echo $rows['total t20 matches'] ?></td>
                    <td> <?php echo $rows['obs t20 wins'] ?></td>
                    <td> <?php echo $rows['smsj t20 wins'] ?></td>
                    <td> <?php echo $rows['t20 draws'] ?></td>
                <?php
                }
                ?>
            </tr>
        </tbody>
    </table>

    <!-- for test table -->
    <table>
        <thead>
            <tr>
                <th class="first_th"> Total Test Matches </th>
                <th> OBS Test Wins </th>
                <th> SMSJ Test Wins </th>
                <th class="last_th"> Test Draws </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($rows = mysqli_fetch_assoc($result2)) {
                    $testtotalmatches = $rows['total test matches'];
                    $obstest = $rows['obs test wins'];
                    $smsjtest = $rows['smsj test wins'];
                    $test_draw = $rows['test draws'];
                ?>
                    <td> <?php echo $rows['total test matches'] ?></td>
                    <td> <?php echo $rows['obs test wins'] ?></td>
                    <td> <?php echo $rows['smsj test wins'] ?></td>
                    <td> <?php echo $rows['test draws'] ?></td>
                <?php
                }
                ?>
            </tr>
        </tbody>
    </table>

    <!-- for chess table -->
    <table>
        <thead>
            <tr>
                <th class="first_th"> Total Chess Matches </th>
                <th> OBS Chess Wins </th>
                <th> SMSJ Chess Wins </th>
                <th class="last_th"> Chess Draws </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($rows = mysqli_fetch_assoc($result3)) {
                    $chesstotalmatches = $rows['total chess matches'];
                    $obschess = $rows['obs chess wins'];
                    $smsjchess = $rows['smsj chess wins'];
                    $chess_draw = $rows['chess draws'];
                ?>
                    <td> <?php echo $rows['total chess matches'] ?></td>
                    <td> <?php echo $rows['obs chess wins'] ?></td>
                    <td> <?php echo $rows['smsj chess wins'] ?></td>
                    <td> <?php echo $rows['chess draws'] ?></td>
                <?php

                }
                ?>
            </tr>
        </tbody>
    </table>

    <!-- for points -->
    <?php
    $totaldraw = $test_draw + $t20draws + $chess_draw;
    $totalobs =($obst20 + $obstest + $obschess) * 2 + $totaldraw;
    $totalsmsj =($smsjt20 + $smsjtest + $smsjchess) * 2 + $totaldraw;
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
                <td> <?php echo ($obst20 + $obstest + $obschess) * 2 + $totaldraw ?></td>
                <td> <?php echo ($smsjt20 + $smsjtest + $smsjchess) * 2 + $totaldraw ?></td>
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
                <th >Obs Test win percentage</th>
                <th >Smsj Test win percentage</th>
                <th >Obs Chess win percentage</th>
                <th class="last_th">Smsj Chess win percentage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo ($obst20 / $t20totalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($smsjt20 / $t20totalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($obstest / $testtotalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($smsjtest / $testtotalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($obschess / $chesstotalmatches ) * 100 ."%"?></td>
                <td> <?php echo ($smsjchess / $chesstotalmatches ) * 100 ."%"?></td>
                
            </tr>
        </tbody>
    </table>
    <a href="#"><button> Edit </button></a>
</body>
</html>     