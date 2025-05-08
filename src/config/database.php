<?php

// Local DB Connection
/*
$host = "localhost";
$port = "5432";
$dbname = "petstore";
$user = "postgres";
$password = "200506";
*/

// Supabase DB Connection
$host = "aws-0-us-east-1.pooler.supabase.com";
$port = "6543";
$dbname = "postgres";
$user = "postgres.dgoecevtghgbmolofptm";
$password = "unicesmag@@";

$data_connection = "

    host=$host
    port=$port
    dbname=$dbname
    user=$user
    password=$password

";

$conn = pg_connect($data_connection);

if (!$conn) {
    echo "connection error";
} else {
    echo "success !!!";
}

//pg_close($conn)

?>