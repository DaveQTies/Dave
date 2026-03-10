<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
</head>
<body>
    <h1>Weather</h1>

    <?php 

    $weather = array("rain","sunrise","clouds","hail","sleet","snow","wind");

    echo "We've seen all kinds of weather this month. ";
    echo "At the beginning of the month we had $weather[5] and $weather[6]. ";
    echo "Then came $weather[1] with a few $weather[2] and some $weather[0]. ";
    echo "At least we didn't get any $weather[3] or $weather[4].";

    ?>

</body>
</html>