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
  document.getElementById("open-dyslexic").addEventListener('change', function () {
    if (this.checked) {
      $("html").css({
        "--body": "OpenDyslexic, sans-serif",
        "--bold": "OpenDyslexic, sans-serif",
      });
      console.log("OpenDyslexic is on");
    } else {
      $("html").css({
        "--body": "Lato, sans-serif",
        "--bold": "Lato, sans-serif",
      });
      console.log("OpenDyslexic is off");
    }
  });
});
