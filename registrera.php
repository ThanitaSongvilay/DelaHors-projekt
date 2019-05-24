<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <h1>Register</h1>
        <br>
    </head>
    <body>
        <div>
            <form name="RegisForm" action="../php pages/reg.php" method="post">
                <input type="text" name="regUname" id="regUname" required>
                <br>
                <UserName>UserName</UserName>
                <br>
                <br>
                <input type="text" name="regUemail" id="regUemail" required>
               <br>
                <UserEmail>Email</UserEmail>
                <br>
                <br>
                <input type="password" name="regUpassword" id="regUpassword" required>
                <br>
                <UserPassword>Password</UserPassword>
                <br>
                <br>
                <button id="regButton" type="sumbit" class="regButton">Register</button>
            </form>
        </div>

        <div>
            <hr>
            <h4>Have an account?</h4>
            <a href="Login.php">Log in here!</a>
        </div>

        <script type= "text/JavaScript">
        	var regBtn       = document.getElementById('regButton');
        	regBtn.addEventListener("click", validateForm);
          function validateForm()
          {
            var uname         =document.regForm.regUname.value;
            var email  		    =document.regForm.regUemail.value;
            var pword         =document.regForm.regUpassword.value;

            if((uname.trim() =="" )|| (email.trim() =="") || (pword == "")){

              alert("Var vänlig och fyll i ett användarnamn, en epost adress och ett lösenord");
              return false;
            }

            else if((validateEmail(email)==true && validatePword(pword)==true)){
                document.RegisForm.submit();
                return true;

            }

            else {
             return false;
             header("Refresh: 0; URL=../Pages/Register.php");
           }

          }

          function validateEmail(email){
        		if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email))
        		{
        			return true;
        		}

        		else {
        		  alert("Ogiltig epost");
        		 return false;
        		}
        	}

          function validatePword(pword){
            var psword =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
            if(psword.test(pword)){
              return true;
            }
            else{
             alert("Lösenordet måste bestå av 6-20 bokstäver, en storbokstav och minst en siffra");
             return false;
            }
          }
          </script>

    </body>
</html>
