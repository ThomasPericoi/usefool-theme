// On load
document.addEventListener("DOMContentLoaded", function () {
  // General - Set/Update variables
  function updateVariables() {
    document.querySelector(':root').style.setProperty('--viewport-height', window.innerHeight + 'px');
    document.querySelector(':root').style.setProperty('--header-height', document.querySelector("#header").offsetHeight + 'px');
  }
  window.addEventListener('resize', function () {
    updateVariables();
  });
  updateVariables();

  // General - Insert quote in the console
  console.log("This theme was made by Thomas Pericoi - https://thomaspericoi.com/");

  // General - Enable ASCII Printer on random
  printRandomAscii();

  // General - Enable OpenDyslexic toggle
  function enableDyslexicMode() {
    document.querySelector(':root').style.setProperty('--body', "OpenDyslexic, sans-serif");
    document.querySelector(':root').style.setProperty('--bold', "OpenDyslexic, sans-serif");
    sessionStorage.setItem("dyslexicMode", true);
    console.log("OpenDyslexic est activé");
  }
  function disableDyslexicMode() {
    document.querySelector(':root').style.setProperty('--body', "Ubuntu, sans-serif");
    document.querySelector(':root').style.setProperty('--bold', "Ubuntu, sans-serif");
    sessionStorage.setItem("dyslexicMode", false);
    console.log("OpenDyslexic est désactivé");
  }
  if (sessionStorage.getItem("dyslexicMode") == "true") {
    enableDyslexicMode();
    document.getElementById("open-dyslexic").checked = true;
  } else {
    disableDyslexicMode();
    document.getElementById("open-dyslexic").checked = false;
  };
  document.getElementById("open-dyslexic").addEventListener('change', function () {
    if (this.checked) {
      enableDyslexicMode();
    } else {
      disableDyslexicMode();
    }
  });
}); 