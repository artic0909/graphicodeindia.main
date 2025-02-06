const loader = document.querySelector('.loader-container');
function hideLoader() {
  loader.style.opacity = '0';
  loader.style.transition = 'opacity 0.5s';
  setTimeout(() => {
    loader.style.display = 'none';
  }, 500);
}

// Wait for the content to load
window.addEventListener('load', hideLoader);