document.addEventListener('DOMContentLoaded', function() {
const form=document.getElementById("Form");
const username=document.getElementById("Username");
const email=document.getElementById("Email");
const password=document.getElementById("Password");
const cpassword=document.getElementById("Cpassword");
const message = document.getElementById("message");





const name_error = document.getElementById('Name_error');
const email_error = document.getElementById('Email_error');
const pass_error = document.getElementById('Pass_error');
const cpass_error = document.getElementById('Cpass_error');
//const success = document.getElementById("Success");

form.addEventListener('submit',(e)=>
{  
   let valid = true;

   var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   //username
   if(username.value === '' || username.value == null)

   {
      e.preventDefault();
      name_error.innerHTML = "Name is Required";
      valid = false;
   }

   else
   {
      name_error.innerHTML = "";
   }
   //email

   if(!email.value.match(email_check))
   {
      e.preventDefault();
      email_error.innerHTML = "Valid Email is required";
      valid = false;
   }
   else
   {
      email_error.innerHTML = "";
   }
   //password
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
   //confirmpassword
   if(cpassword.value === '')
   {
      e.preventDefault();
      cpass_error.innerHTML = "Please Confirm Your password";
      valid = false;
   }


   else if(cpassword.value !== password.value)
   {
      e.preventDefault();
      cpass_error.innerHTML = "Password doesn't match";
     valid=false;
   }
   else
   {
      cpass_error.innerHTML ='';
   }

  if (valid) {
      e.preventDefault();
      message.style.display = "block";
   
   }
  
})
});

function togglemenu(){
$("#menuList").fadeToggle(1000);
}
/*
var menuList=document.getElementById("menuList");
menuList.style.maxHeight="px";
function togglemenu(){
   
   if(menuList.style.maxHeight =="0px"){
     
      menuList.style.maxHeight="100px";
      menuList.style.hide()
   }
   else{
      menuList.style.maxHeight="0px";
   }
}


function showMessage(){
   //e.preventDefault()
   //messageElement.style.display="block";
   var messageElement = document.getElementById("message");
   if (valid) {
      e.preventDefault();
      message.style.display = "block"; 
   }
  
}
      


  if(submit === form )

   {
      e.preventDefault();
      success.innerHTML = "Logined Successfully ";
   }

   else
   {
      success.innerHTML = "";
   }





if(cpassword2Value === '') {
   setError(password2, 'Please confirm your password');
} else if (password2Value !== passwordValue) {
   setError(password2, "Passwords doesn't match");
} else {
   setSuccess(password2);
}
if(cpassword.value.length >= 20)

   {
      e.preventDefault();
      pass_error.innerHTML = "Password cannot be more than 20 characters";
   }

   if(cpassword.value === 'password')

   {
      e.preventDefault();
      pass_error.innerHTML = "Password cannot be password";
   }*/

