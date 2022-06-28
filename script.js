function jelentkezés() {
  var uzenet;
  var valSzak = document.getElementById("szak");
  if (valSzak.value == "0") {
    uzenet = "szakot kell választani!";
  } else {
    uzenet = "mehet a jelentkezés!";
  }
  alert(uzenet);
}
