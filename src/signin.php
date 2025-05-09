<?php

    include('config\database.php');

    $email = $_POST['e_mail'];
    $passw = $_POST['p_assw'];

    // $hashed_password = password_hash($passw, PASSWORD_DEFAULT);

    $hashed_password = $passw;

    $sql = "
        SELECT 
            id,
            COUNT(id) as total
        FROM
            users u
        WHERE
            email = '$email' and 
            password = '$hashed_password'
        GROUP BY
            id  
    ";

    $res = pg_query($conn, $sql);
    if($res){
        $row = pg_fetch_assoc($res);
        if($row['total']>0){
            header('Refresh:0; URL=http://localhost/pet-store/src/home.php');
            echo "<script>alert('Welcome to home')</script>";
        } else {
            echo "<script>alert('Login Failed!!!!')</script>";
        }
    }

?>