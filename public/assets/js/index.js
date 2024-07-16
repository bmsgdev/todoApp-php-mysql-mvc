/**register form verification with native js: input usrname,email,password,confirm password */

let registerForm = document.getElementById("registerForm");
     registerForm.addEventListener("submit", function (e) {
       e.preventDefault();

       let username = document.getElementById("username").value;
       let email = document.getElementById("email").value;
       let password = document.getElementById("password").value;
       let confirmPassword = document.getElementById("confirmPassword").value;

         if (
         username === "" ||
         email === "" ||
         password === "" ||
         confirmPassword === ""
       ) {
         alert("Veillez remplir tous les champs.");
         return;
       }

       if (password !== confirmPassword) {
         alert("Les mots de passe ne correspondent pas..");
         return;
       }
       //soumetre une fois que tous les champs sont correct
       document.getElementById("registerForm").submit();
     });
