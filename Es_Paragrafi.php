<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafi</title>
</head>
<body>
    <?php
    $size = rand(1,11);
    $num = rand(1,6);
    for ($i=0; $i < $num ; $i++) { 
        echo "<p style='font-size: {$size}px;'>Ciao sono Yuri</p>";
        $size = $size +2;
    }
    ?>
</body>
</html>
