<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <form id="myForm">
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Password">
        <button type="button" onclick="submitForm()">Submit</button>
    </form>

    <script>
        function submitForm() {
            var formData = new FormData(document.getElementById("myForm"));
            var xhr = new XMLHttpRequest();
           
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert(xhr.responseText); // Response from the server
                }
            };
            xhr.open("POST", "process.php", true);
            xhr.send(formData);

        }
    </script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize data as needed

    // Connect
}
?>



