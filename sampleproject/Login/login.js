window.onload = function() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    var response = JSON.parse(this.responseText);
                    if (response.success == true) {
                        window.location.replace("/sampleproject/dashboard.php"); 
                    } else {
                        console.log("session is null")
                    }
                } else {
                    console.error("Error: Unable to fetch response from PHP");
                }
            }
        };
        xhr.open('GET', 'login.php', true);
        xhr.send();

};

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById("demo");

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("this.responseText");
               // console.log(this.responseText)
               var response = JSON.parse(this.responseText);
                if (response.success) {
                    document.getElementById("response").innerHTML = "Logged in successfully";
                    setTimeout(function(){    
                    window.location.replace("/sampleproject/dashboard.php"); 
                },1000);
               
                } else {
                    var errorMessage = response.message ;
                    document.getElementById("response").innerHTML = errorMessage;
                  
                }
            }
        };
        xmlhttp.open("POST", "login.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var formData = new FormData(form);
        xmlhttp.send(new URLSearchParams(formData));
    });
    
});
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

