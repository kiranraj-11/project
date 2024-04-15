<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
if(isset($_SESSION["Username"])) {
    $response = array("success" => true, "message" => "session is stored");
    header('Content-Type:application/json');
    $myjson=json_encode($response);
    echo $myjson;
    // header('location: /sampleproject/dashboard.php');
    exit;
} else {
    $response = array("success" => false, "message" => "Session is not stored");
    header('Content-Type:application/json');
    $myjson=json_encode($response);
    echo $myjson;
    exit;
} 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST["Username"]) && isset($_POST["password"])){
    $name = $_POST["Username"];
    $pwd = $_POST["password"];
    $hash = md5($pwd);

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login";

    $con = mysqli_connect($servername, $username, $password, $database); 

    if (!$con) {
        die("Failed to connect: " . mysqli_connect_error());
    } 

    $sql = "SELECT Password FROM registartion WHERE Username ='$name'";  
    $result = mysqli_query($con, $sql); 

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['Password'];

        if ($hash == $storedPassword) {
            $response = array("success" => true);
             $_SESSION["Username"] = $name; // Setting session variable upon successful login
    
        } else {
            $response = array("success" => false, "message" => "Incorrect password");
        } 
    } else {
        $response = array("success" => false, "message" => "User not found");
    }
    
    mysqli_close($con);
    
    header('Content-Type:application/json');
    $myjson=json_encode($response);
    echo $myjson;
 
}
}
?>