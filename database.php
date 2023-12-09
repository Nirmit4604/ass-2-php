<?php
$host = "172.31.22.43";
$username = "Nirmitkumar200548670";
$password = "LckskkMoVK";
$dbname = "Nirmitkumar200548670";

// Create a database connection
$conn=mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Conection Failed:". mysqli_connect_error());
}

// Use prepared statements to prevent SQL injection
$fname = $_POST["rfname"];
$lname = $_POST["rlname"];
$gmail = $_POST["registerEmail"];
$pass = $_POST["registerPassword"];
$duplicate="SELECT *FROM registerphp where email='$gmail'";
$result1=mysqli_query($conn,$duplicate);
if (mysqli_num_rows($result1) > 0) {
    echo "Duplicate data";
} 
else {
    $query = "INSERT INTO registerphp VALUES ('$fname', '$lname', '$gmail', '$pass')";
    $result=mysqli_query($conn, $query);
    if ($result) {
        echo "inserted";
    }
}

// Close the prepared statement and database connection
?>