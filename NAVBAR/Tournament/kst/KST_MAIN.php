<?php

require_once('RETRIVE_INFO/config.php');
$query = "SELECT * FROM `kst_details`;";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching Data</title>
    <link rel="stylesheet" href="kstcss.css">
</head>

<body>
    <div class="links">
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
    </div>
</body>

</html>