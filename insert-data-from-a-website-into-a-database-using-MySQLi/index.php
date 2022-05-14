<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form>
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Firstname">
</form>

<?php
    $sql = INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUE;
    VALUES ('Daniel', 'Nielsen', 'stevaniamaurenwanggai11@gmail.com', 'Admin', 'test123');";
    mysqli_query($conn,$sql);
    
?>  

    
</body>
</html>