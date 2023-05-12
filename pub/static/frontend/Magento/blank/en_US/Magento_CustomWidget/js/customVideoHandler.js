function loadEvent() {}

// Initalize Variables

const video = document.getElementById("video");
const playToggle = document.getElementById("playToggle");
const muteToggle = document.getElementById("muteToggle");

// Toggle Play And Pause On Video

playToggle.addEventListener('click', () => {
  video.paused ? (
    video.play(),
    console.log('Its playing')
  ) : (
    video.pause(),
    console.log('Its not playing')
  );
});

// Toggle Mute And Unmute On Video

muteToggle.addEventListener('click', () => {
  video.muted ? (
    video.muted = false
  ) : (
    video.muted = true
  );
});

console.log("The script file is loaded.")

window.addEventListener('load', loadEvent);