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


  // SCRIPT PER IL MENU A TENDINA
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";

  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";

  }





  

  // SCRIPT PER L ANIMAZIONE E IL BOTTONE PER RICOSTRUIRE IL TESTO
  const restartButton = document.querySelector(".reset");

restartButton.addEventListener(
    "click",
    () => {
        const textAnimation = document.querySelector(".text-stroke");

        setAnimationName(textAnimation, "none");
        requestAnimationFrame(() =>
            setTimeout(() => setAnimationName(textAnimation, ""), 0)
        );
    },
    false
);

const setAnimationName = (element, animationName) => {
    if (element) {
        element.style.animationName = animationName;
    }
};






// controlli audio

var audio = document.getElementById("backgroundAudio");
var playButton = document.getElementById("playButton");
var pauseButton = document.getElementById("pauseButton");
var muteButton = document.getElementById("muteButton");
var unmuteButton = document.getElementById("unmuteButton");
var volumeSlider = document.getElementById("volumeSlider");

playButton.addEventListener("click", function() {
  audio.play();
});

pauseButton.addEventListener("click", function() {
  audio.pause();
});

muteButton.addEventListener("click", function() {
  audio.muted = true;
});

unmuteButton.addEventListener("click", function() {
  audio.muted = false;
});

volumeSlider.addEventListener("input", function() {
  audio.volume = volumeSlider.value;
});

volumeSlider.addEventListener("change", function() {
  audio.volume = volumeSlider.value;
});

