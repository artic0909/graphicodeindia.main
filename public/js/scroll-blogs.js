document.addEventListener("DOMContentLoaded", () => {
  const lists = document.querySelector(".scroll-lists");
  const items = lists.querySelectorAll(".lists-item");

  items.forEach((item, index) => {
    const delay = index * 1;
    item.style.setProperty("--item-delay", `${delay}s`);
  });

  lists.style.animationPlayState = "running";

  lists.addEventListener("mouseenter", () => {
    lists.style.animationPlayState = "paused";
  });

  lists.addEventListener("mouseleave", () => {
    lists.style.animationPlayState = "running";
  });
});
