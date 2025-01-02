const words = [
  "Baumcutter?", 
  "Leafbläser?", 
  "Treeschneider?",
];

let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;
let isWaitingAfterDelete = false;
let typewriterElement;

const typingSpeed = 100;
const deletingSpeed = 50;
const wordPause = 2000;
const deleteEndPause = wordPause / 2;

function init() {
  typewriterElement = document.getElementById("typewriter");
  if (!typewriterElement) return;
  type();
}

function type() {
  const currentWord = words[wordIndex];

  if (isWaitingAfterDelete) {
    isWaitingAfterDelete = false;
    isDeleting = false;
    wordIndex = (wordIndex + 1) % words.length;
    setTimeout(type, deleteEndPause);
    return;
  }

  if (isDeleting) {
    charIndex--;
  } else {
    charIndex++;
  }

  typewriterElement.textContent = currentWord.substring(0, charIndex);

  let timeout = isDeleting ? deletingSpeed : typingSpeed;

  if (!isDeleting && charIndex === currentWord.length) {
    timeout = wordPause;
    isDeleting = true;
  } else if (isDeleting && charIndex === 0) {
    isWaitingAfterDelete = true;
  }

  setTimeout(type, timeout);
}

document.addEventListener("DOMContentLoaded", init);