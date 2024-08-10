<?php

require_once('RETRIVE_INFO/config.php');
$query = "SELECT * FROM `t20`;";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching Data</title>
    <link rel="stylesheet" href="kstcss.css">

    <!-- for font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">
</head>

<body>
        <?php
        $season = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $season = $season + 1;
        ?>
        <div class="div">
           <?php echo "<a href='RETRIVE_INFO/common.php?i=$season'> <span>Season</span> $season</a>";?>
        </div>
        <?php
        }
        ?>
        <button><a href="LOGIN/LOGIN.html">Add More Seasons</a></button>
</body>

</html>