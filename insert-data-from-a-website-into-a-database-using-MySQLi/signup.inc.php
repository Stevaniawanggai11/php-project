<?php
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUE; VALUES ('Daniel', 'Nielsen', 'stevaniamaurenwanggai11@gmail.com', 'Admin', 'test123');";
    mysqli_query($conn, $sql);   

    header("Location: ../index.php?signup=success");
