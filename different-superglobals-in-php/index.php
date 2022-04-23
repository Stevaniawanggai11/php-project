<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?php
/*
$_GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/
$ = 5;

function something() {
    $y = 10;
    echo $GLOBALS['x'];
}

something();
?>

</body>

</html>
