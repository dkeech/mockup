document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("#menu-main-nav li").forEach((li) => {
    let timeoutId; // Variable to store the timeout ID

    li.addEventListener("mouseover", () => {
      const subMenu = li.querySelector(".sub-menu");
      if (subMenu) {
        clearTimeout(timeoutId); // Clear any pending timeout to remove the class
        subMenu.classList.add("nav-show");
      }
    });

    li.addEventListener("mouseout", () => {
      const subMenu = li.querySelector(".sub-menu");
      if (subMenu) {
        // Set the timeout and store its ID
        timeoutId = setTimeout(() => {
          subMenu.classList.remove("nav-show");
        }, 500); // Delay the removal by 500 milliseconds
      }
    });
  });
});
