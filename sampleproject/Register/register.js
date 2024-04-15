
 document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById("demo");
    

    // Handle form submission and validation
    document.getElementById("signupBtn").addEventListener('click', function(event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    });
});




document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById("demo");

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const formData = new FormData(this);
      
        const xhr = new XMLHttpRequest();
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById("response").innerHTML = "Thank you, Your Data has been received.<br>Please wait few seconds you are redirected to login page."
                setTimeout(function(){
                    window.location.href = "/sampleproject/Login/login.html"; 
            },5000);
                
            } else {
                console.error('Request failed. Status:', xhr.status);
                
            }
        };

        xhr.open("POST", "database.php", true);
        xhr.send(formData); 
    });
});

  