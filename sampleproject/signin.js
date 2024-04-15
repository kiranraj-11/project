 const form = document.getElementById("Form");
 const email = document.getElementById("Email");
 const password = document.getElementById("Password");
 const message = document.getElementById("Message");

 const email_error=document.getElementById("Email_error");
 const pass_error=document.getElementById("Pass_error");
 
 form.addEventListener('submit', (e) =>{
    let valid=true;

    var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if(!email.value.match(email_check)){
        e.preventDefault();
        email_error.innerHTML="Valid Email is Required";
    }
    else{
        email_error.innerHTML='';

    }
    if(password.value.length <= 5)

   {
      e.preventDefault();
      pass_error.innerHTML = "Password must be more than 6 characters";
      valid = false;
   }

   else
   {
     pass_error.innerHTML = "";
   }

   if(password.value.length >= 20)

   {
      e.preventDefault();
      pass_error.innerHTML = "Password cannot be more than 20 characters";
      valid = false;
   }

   if(password.value === 'password')

   {
      e.preventDefault();
      pass_error.innerHTML = "Password cannot be password";
      valid = false;
   }

   if(valid){
    e.preventDefault()
    message.style.display ='block';
   }

 })




