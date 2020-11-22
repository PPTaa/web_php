<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> function</h1>
    <?php
        function basic(){
            print("basic function1<br>");
            print("basic function2<br>");
        }
        
        basic();
        basic();
    ?>
    <h2> parameter & argument</h2>
    <?php
    function sum($left, $right){
        print($left + $right);
        print('<br>');
    }
    sum(2,4);
    sum(6,4);
    sum(2,10);
    ?>
    <h2> return </h2>
    <?php
    function sum2($left, $right){
        return $left + $right."<br>";
    }
    print(sum2(2,4));
    echo sum2(6,4);
    echo sum2(2,10);
    file_put_contents('result.txt', sum2(10,20));
    ?>
</body>

</html>