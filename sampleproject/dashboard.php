<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$database="login";

$con= new mysqli($servername,$username,$password,$database);

if($con->connect_error)
{
    die("Failed to Connect".$con->connect_error);

}
$sql="SELECT id, Username,Email,Country FROM Registartion";
$userprofile =  $_SESSION["Username"];
if($userprofile == true){

}
else{
    header('location:Login/login.html');
}
$result=$con->query($sql);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    body{
        background-color:#E6E6FA;
    }
    #Dropdown{
        margin-left:800px;
        margin-top:-50px;
        display:flex;
       }
    hr{
        color:#C0C0C0;
    }
    
 #badge1{
    position:absolute;
    top:5px;
    left:32px;
    font-size:xx-small;
 }
 #badge2{
    position:absolute;
    top:6px;
    left:70px;
    font-size:xx-small;
 }
 #search{
    height:35px;
    width:250px;
 }
#logo{
    margin-left:120px;
}
li:hover{
color:#00008B;
}
li:active{
color:cyan;
}
</style>
<script type="text/javascript">
     function preventBack()
     {window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload = function(){null};
    </script>
    </head>
<body>
    <header class="bg-white"> 
<div class="container-fluid ">
      <ul class="list-unstyled  list-inline  ">
        <span><li class="list-inline-item mt-3"><i class= "bi-bell text-muted ms-3   pe-3"> <span class="badge bg-success" id="badge1">2</span></i></li></span>
        <span><li class="list-inline-item"> <i class="bi-envelope text-secondary  ps-2 "><span class="badge bg-primary ms-2" id="badge2">4</span></i></li></span>
        <span> <li class="list-inline-item"><i class="bi bi-chat-right-text ps-4"></i></li></span>
        <span class="ms-4 "><i class="bi-search text-muted ms-5"><input type="text" class="bg bg-basic border border-4 border-light rounded-3" id="search" placeholder="Search" ></i></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="60" viewBox="0 0 77 42" class="position-absolute mt-3 " id="logo">
        <path fill="#0DDBB9" fill-rule="nonzero" d="M5.478 1.688V17H.946V1.688h4.532zm9.064 0l-4.334 6.798L14.938 17H9.79L5.61 8.838l4.268-7.15h4.664zm11.044 11.506c0 .41.051.715.154.913.103.198.286.348.55.451l-.88 2.794c-.792-.059-1.437-.209-1.936-.451-.499-.242-.91-.634-1.232-1.177-.763 1.144-1.943 1.716-3.542 1.716-1.159 0-2.094-.348-2.805-1.045-.711-.697-1.067-1.595-1.067-2.695 0-1.305.484-2.303 1.452-2.992.968-.69 2.376-1.034 4.224-1.034h.836v-.286c0-.587-.117-.983-.352-1.188-.235-.205-.682-.308-1.342-.308-.352 0-.803.055-1.353.165-.55.11-1.111.26-1.683.451l-.946-2.772c.719-.293 1.5-.52 2.343-.682.843-.161 1.61-.242 2.299-.242 1.848 0 3.19.356 4.026 1.067.836.711 1.254 1.8 1.254 3.267v4.048zm-5.544 1.188c.264 0 .51-.066.737-.198.227-.132.414-.3.561-.506V11.94h-.462c-.616 0-1.07.11-1.364.33-.293.22-.44.557-.44 1.012 0 .337.088.605.264.803.176.198.41.297.704.297zm14.872-9.57c1.452 0 2.548.55 3.289 1.65.74 1.1 1.111 2.64 1.111 4.62 0 1.217-.194 2.306-.583 3.267-.389.96-.939 1.716-1.65 2.266a3.9 3.9 0 0 1-2.453.825c-1.115 0-2.024-.389-2.728-1.166v5.28l-4.356.44V5.252h3.872l.176 1.144c.47-.557.994-.96 1.573-1.21a4.39 4.39 0 0 1 1.749-.374zm-1.716 9.526c1.1 0 1.65-1.063 1.65-3.19 0-.895-.059-1.577-.176-2.046-.117-.47-.275-.781-.473-.935-.198-.154-.451-.231-.759-.231-.616 0-1.13.367-1.54 1.1v4.488c.19.293.389.502.594.627.205.125.44.187.704.187zm18.59-3.366c0 .367-.03.829-.088 1.386h-7.128c.117.792.363 1.324.737 1.595.374.271.913.407 1.617.407.41 0 .829-.084 1.254-.253.425-.169.895-.429 1.408-.781l1.76 2.376c-1.423 1.159-3.036 1.738-4.84 1.738-2.083 0-3.66-.576-4.73-1.727-1.07-1.151-1.606-2.673-1.606-4.565 0-1.173.224-2.24.671-3.201a5.34 5.34 0 0 1 1.991-2.288c.88-.565 1.943-.847 3.19-.847 1.159 0 2.17.242 3.036.726.865.484 1.536 1.188 2.013 2.112.477.924.715 2.031.715 3.322zm-4.29-1.232c-.015-.69-.121-1.225-.319-1.606s-.554-.572-1.067-.572c-.484 0-.847.169-1.089.506-.242.337-.4.946-.473 1.826h2.948V9.74zm9.064 7.7c-1.188 0-2.101-.334-2.739-1.001-.638-.667-.957-1.61-.957-2.827V.632l4.356-.44v13.244c0 .396.176.594.528.594.161 0 .315-.03.462-.088l.77 3.102c-.69.264-1.496.396-2.42.396zm6.6 0c-1.188 0-2.101-.334-2.739-1.001-.638-.667-.957-1.61-.957-2.827V.632l4.356-.44v13.244c0 .396.176.594.528.594.161 0 .315-.03.462-.088l.77 3.102c-.69.264-1.496.396-2.42.396zm13.178-4.246c0 .41.051.715.154.913.103.198.286.348.55.451l-.88 2.794c-.792-.059-1.437-.209-1.936-.451-.499-.242-.91-.634-1.232-1.177-.763 1.144-1.943 1.716-3.542 1.716-1.159 0-2.094-.348-2.805-1.045-.711-.697-1.067-1.595-1.067-2.695 0-1.305.484-2.303 1.452-2.992.968-.69 2.376-1.034 4.224-1.034h.836v-.286c0-.587-.117-.983-.352-1.188-.235-.205-.682-.308-1.342-.308-.352 0-.803.055-1.353.165-.55.11-1.111.26-1.683.451l-.946-2.772c.719-.293 1.5-.52 2.343-.682.843-.161 1.61-.242 2.299-.242 1.848 0 3.19.356 4.026 1.067.836.711 1.254 1.8 1.254 3.267v4.048zm-5.544 1.188c.264 0 .51-.066.737-.198.227-.132.414-.3.561-.506V11.94h-.462c-.616 0-1.07.11-1.364.33-.293.22-.44.557-.44 1.012 0 .337.088.605.264.803.176.198.41.297.704.297z"/>
</svg>
        </ul>
    <div class="Container"  id="Dropdown">
       <button class="btn text-primary btn-md me-3" style="background-color:#E6E6FA">Product</button>
 <div class="dropdown"> 
    <button type="button" class="btn text-primary dropdown-toggle me-3" data-bs-toggle="dropdown"style="background-color:#E6E6FA">
     Reports
    </button>
    <ul class="dropdown-menu">
      <li><h5 class="dropdown-header">Reports</h5></li>
      <li><a class="dropdown-item text-secondary mt-3" href="#"><i class="bi bi-file-earmark-pdf-fill text-primary  me-2"></i>Pdf</a></li>
      <li><a class="dropdown-item text-secondary mt-4" href="#"> <i class="bi bi-file-earmark-excel-fill text-primary  me-2"></i>Excel</a></li>
     </ul></div>
    <button class="btn  text-primary" style="background-color:#E6E6FA">Settings</button>
    <p class="h5 ms-1  mt-1"><?php
    echo $userprofile ;
    ?></p>
        <img class="thumbnail ms-2 " src=images/face28.png>
        <div class="dropdown">
    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown">
</button>
    <ul class="dropdown-menu ">
      <li><a class="dropdown-item text-secondary mt-2" href="#"><i class="bi bi-gear-fill text-primary me-2"></i>Settings</a></li>
      <li><a class="dropdown-item text-secondary  mt-4" href="logout.php"><i class="bi bi-box-arrow-right text-primary me-2"></i>Logout</a></li>
    </ul>
  </div>       
 </div>
 </div>
<hr>
<div class="container mt-4 ">
<ul class="list-inline  d-flex justify-content-between">
<li class= "list-inline-item"><i class="bi bi-file-text-fill ms-4 "></i>
<p>Dashboard</p></li>
<li class= "list-inline-item "><i class="bi bi-box ms-4"></i>
<p>UI elements</p></li>
<li class= "list-inline-item "><i class="bi bi-file-bar-graph ms-5 "></i>
<p >Form elements</p></li>
<li class= "list-inline-item "><i class="bi bi-bar-chart-line-fill ms-2"></i>
<p >Charts </p></li>
<li class= "list-inline-item "><i class="bi bi-grid-3x3 ms-3"></i>
<p >Tables</strong></p></li>
<li class= "list-inline-item "><i class="bi  bi-emoji-smile-fill ms-2"></i>
<p >Icons</p></li>
<li class= "list-inline-item "><i class="bi bi-file-earmark-fill ms-5"></i>
<p >Sample pages </p></li>
<li class= "list-inline-item "><i class="bi bi-card-text ms-5"></i>
<p>Documentation </p></li>
</div>
</header>
    <div class="container-fluid bg-white">
    <div class="table-responsive">
        <main>
    <h1>Fetched Data From Database</h1>
    <table  class="table">
        <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Country</th></tr>
        <?php
    if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()){
        ?>
        <tr><td><?php echo $row["id"];?></td>
        <td><?php echo $row["Username"];?></td>
        <td><?php echo $row["Email"];?></td>
        <td><?php echo $row["Country"];?></td></tr>
        <?php
    }
}
else{
    echo "0 reults";
}
        ?>
    </table>
    </div>
    </div>
</main>
</body>
</html>