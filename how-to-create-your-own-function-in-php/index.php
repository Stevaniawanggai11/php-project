<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>

</head>

<body>
    
<?php

function newCalc($x) {
    $newnr = $x * 0.75;
    echo "Here is 75% of what you wrote: ".$newnr;
}

$x = 100;
newCalc($x);

$a = 10;
newCalc($a);

?>
</body>
</html>
