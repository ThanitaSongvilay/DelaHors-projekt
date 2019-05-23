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
