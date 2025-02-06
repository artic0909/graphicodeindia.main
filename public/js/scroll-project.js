const container = document.querySelector(".img-scroll-container");
const images = document.querySelectorAll(".img-scroll-container img");
let currentIndex = 0;

function showNextImage() {
  currentIndex = (currentIndex + 1) % images.length; // Loop back to the first image
  const offset = currentIndex * 100;
  container.style.transform = `translateX(-${offset}%)`;
}

// Set interval for image change
setInterval(showNextImage, 2000); // Change image every 2 seconds
