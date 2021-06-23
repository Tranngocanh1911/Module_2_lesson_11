
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <form action="" name="form" method="post">
        <input type="submit" name="btn"  value="Bigger">
        <input type="submit" name="btn2" value="Smaller">
        <input type="submit" name="btn3" value="Correct" >
        <input type="submit" name="btn4" value="Guess" >
    </form>
    </body>
    </html>

<?php
session_start();
function findMid($arr): int
{
    $_SESSION['low'] = 0;
    $_SESSION['high'] = count($arr) - 1;
    $_SESSION['mid'] = (int)(($_SESSION['low'] + $_SESSION['high']) / 2);
    echo $_SESSION['mid'];
}

function higherNumber($arr)
{
    $_SESSION['low'] = findMid($arr) + 1;
    $_SESSION['mid'] = (int)(($_SESSION['low'] + $_SESSION['high']) / 2);


}

function lowerNumber($arr)
{
    $_SESSION['high'] = findMid($arr) - 1;
    $_SESSION['mid'] = (int)(($_SESSION['low'] + $_SESSION['high']) / 2);


}

function correct()
{
    echo 'this is the correct number';
}
$number = range(1,100,1);

if (isset($_POST['btn'])){
    higherNumber($number);
}
if (isset($_POST['btn2'])){
    lowerNumber($number);
}
if (isset($_POST['btn3'])){
    correct();
}
if (isset($_POST['btn4'])){
    echo findMid($number);
}

?>