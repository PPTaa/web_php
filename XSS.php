<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo htmlspecialchars(
    '<script>
    alert("asd");
    </script>');
    ?>
</body>
</html>