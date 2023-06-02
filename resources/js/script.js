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






  // controlli audio

  var audio = document.getElementById('rainSound');
  var button = document.getElementById('toggleRainSound');

  button.addEventListener('click', function() {
    if (audio.paused) {
      audio.play();
      button.innerHTML = 'Disattiva suono pioggia';
    } else {
      audio.pause();
      button.innerHTML = 'Attiva suono pioggia';
    }
  });
  // SCRIPT PER IL MENU A TENDINA
 


//  script animazione home page testo

window.addEventListener('load', function() {
  const elements = document.querySelectorAll('.animate__animated');
  elements.forEach(function(element) {
    element.style.visibility = 'hidden';
  });
  setTimeout(function() {
    elements.forEach(function(element) {
      element.style.visibility = 'visible';
    });
  }, 500);
});


// script animazione home page blink per stop

  

  

  // SCRIPT PER L ANIMAZIONE E IL BOTTONE PER RICOSTRUIRE IL TESTO
//   const restartButton = document.querySelector(".reset");

// restartButton.addEventListener(
//     "click",
//     () => {
//         const textAnimation = document.querySelector(".text-stroke");

//         setAnimationName(textAnimation, "none");
//         requestAnimationFrame(() =>
//             setTimeout(() => setAnimationName(textAnimation, ""), 0)
//         );
//     },
//     false
// );

// const setAnimationName = (element, animationName) => {
//     if (element) {
//         element.style.animationName = animationName;
//     }
// };











