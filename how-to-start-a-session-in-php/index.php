<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<ul>
    <Li><a href="index.php">HOME</a></Li>
    <Li><a href="contact.php">CONTACT</a></Li>
</ul>

<?php

$_SESSION['username'] = "dani948a";
echo $_SESSION['username'];

if (isset($_SESSION['username'])) {
    echo "You are not logged in!";
} else {
    echo "You are logged in!";
}

?>
</body> 
</html>