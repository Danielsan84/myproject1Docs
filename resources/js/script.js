// THEME BUTTONS
/* Aggiungi un event listener per catturare il click sui bottoni */
document.addEventListener("DOMContentLoaded", function() {
    var blackButton = document.getElementById("black-theme");
    var darkButton = document.getElementById("dark-theme");
    var greenButton = document.getElementById("green-theme");
    var blueButton = document.getElementById("blue-theme");
    
    blackButton.addEventListener("click", function() {
      setTheme("black");
    });
    
    darkButton.addEventListener("click", function() {
      setTheme("dark");
    });
    
    greenButton.addEventListener("click", function() {
      setTheme("green");
    });
    
    blueButton.addEventListener("click", function() {
      setTheme("blue");
    });
  
    // Controlla se il tema è già stato impostato in precedenza
    var theme = localStorage.getItem("theme");
    if (theme) {
      setTheme(theme);
    }
  });
  
  /* Definisci la funzione setTheme per cambiare il tema del sito */
  function setTheme(themeName) {
    var body = document.querySelector("body");
    body.className = "";
    body.classList.add(themeName + "-theme");
  
    // Salva il tema selezionato dall'utente nel localStorage
    localStorage.setItem("theme", themeName);
  }
