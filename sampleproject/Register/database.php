<?php

if(isset($_POST["Username"])){
    $name=$_POST["Username"];
}
if(isset($_POST["email"])){
    $email=$_POST["email"];
}
if(isset($_POST["country"])){
    $country=$_POST["country"];
}
if(isset($_POST["password"])){
    $pwd=$_POST["password"];
}
$hash = md5($pwd);
$str=md5("jeevaammu");
echo "Generated hash:".$str;




// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $statement = $con->prepare("INSERT INTO Registartion (Username, email, country, password) VALUES (?, ?, ?, ?)"); 
    $statement->bind_param("ssss", $name, $email, $country, $hash); 
    if ($statement->execute()) {
        echo "Data inserted successfully";
       
    } else {
        echo "Error inserting data: " . $con->error;
    }
    

    $statement->close();
    $con->close();
}


?>



