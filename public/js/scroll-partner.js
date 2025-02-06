document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.partners-container');
    const items = Array.from(container.children);

    items.forEach(item => {
      container.appendChild(item.cloneNode(true));
    });
  });
  