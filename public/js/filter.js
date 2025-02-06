document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".filter-buttons button");
  const cards = document.querySelectorAll(".filter-result-show .p-2");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const filter = button.id;

      // Highlight the active button
      buttons.forEach((btn) => btn.classList.remove("btn-active"));
      button.classList.add("btn-active");

      // Filter cards
      cards.forEach((card) => {
        const category = card.getAttribute("data-category");
        if (filter === "all" || category === filter) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
});
