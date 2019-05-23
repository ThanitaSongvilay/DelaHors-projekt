function kolla()
{
      var namn = document.getElementById("Namn").value;
      var pass = document.getElementById("password").value;

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
