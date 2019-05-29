function kolla()
{
      var namn = document.form.Namn.value;
      var pass = document.form.Losen.value;

      if(namn.trim() == "")
    {
      alert("Skriv in ditt användarnamn.");
      return false;
    }
      if(pass.trim() == ""){
      alert("Skriv in ditt lösenord.");
      return false;
    }
}

function kollaSök()
{
    var sök = document.sökruta.sök.value;

      if(sök.trim() == "")
    {
      alert("Du måste skriva in någonting i sökrutan för att kunna söka fkn idiot...");
      return false;
    }
}


function validateForm()
{
  var uname = document.RegisForm.regUname.value;
  var email = document.RegisForm.regUemail.value;
  var pword = document.RegisForm.regUpassword.value;

  if((uname.trim() =="" )|| (email.trim() =="") || (pword == ""))
  {

    alert("Var vänlig och fyll i ett användarnamn, en epost adress och ett lösenord");
    return false;
  }
  else if((validateEmail(email)==true && validatePword(pword)==true))
  {
      document.RegisForm.submit();
      return true;
  }
  else
  {
   return false;
   header("Refresh: 0; URL=../Pages/Register.php");
  }
}

function validateEmail(email)
{
  if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email))
  {
    return true;
  }

  else
  {
    alert("Ogiltig epost");
   return false;
  }
}

function validatePword(pword)
{
  var psword =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  if(psword.test(pword))
  {
    return true;
  }
  else
  {
   alert("Lösenordet måste bestå av 6-20 bokstäver, en storbokstav och minst en siffra");
   return false;
  }
}
