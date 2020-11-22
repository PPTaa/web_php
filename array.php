<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Array </h1>
    <?php
        $asd = array("apple","banana","coconut","drum");
        echo $asd[1]."<br>";
        echo $asd[3]."<br>";
        var_dump(count($asd));
        array_push($asd, "egg");
        var_dump($asd);
    ?>
</body>
</html>