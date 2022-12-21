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

  // General - Quote in the console
  console.log(
    "This theme was made by Thomas Pericoi - https://thomaspericoi.com/"
  );

  // General - Enable ASCII Printer on random
  printAsciiRandom();
});
