// Variables
class Page {
  constructor() {
    this.setVariables();
    $(window).on("resize", this.setVariables.bind(this));
  }

  setVariables() {
    $("html").css({
      "--viewport-height": $(window).outerHeight() + "px",
      "--header-height": $("header#header").outerHeight() + "px",
    });
  }
}

// On load
$(document).ready(function () {
  new Page();

  // General - Insert quote in the console
  console.log(
    "This theme was made by Thomas Pericoi - https://thomaspericoi.com/"
  );

  // General - Enable ASCII Printer on random
  printRandomAscii();

  // General - Enable OpenDyslexic toggle
  function enableDyslexicMode() {
    $("html").css({
      "--body": "OpenDyslexic, sans-serif",
      "--bold": "OpenDyslexic, sans-serif",
    });
    sessionStorage.setItem("dyslexicMode", true);
    console.log("OpenDyslexic est activé");
  }

  function disableDyslexicMode() {
    $("html").css({
      "--body": "Ubuntu, sans-serif",
      "--bold": "Ubuntu, sans-serif",
    });
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
