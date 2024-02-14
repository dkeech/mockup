//I removed the event listener that wrapped these functions because it didn't always trigger.

const hamburger = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");

hamburger.addEventListener("click", () => {
  console.log("mobileMenu.style.display", mobileMenu.style.display);
  mobileMenu.style.display =
    mobileMenu.style.display === "block" ? "none" : "block";
});

document.querySelectorAll("#menu-main-nav li").forEach((li) => {
  let timeoutId;

  li.addEventListener("mouseover", () => {
    const subMenu = li.querySelector(".sub-menu");
    if (subMenu) {
      clearTimeout(timeoutId);
      subMenu.classList.add("nav-show");
    }
  });

  li.addEventListener("mouseout", () => {
    const subMenu = li.querySelector(".sub-menu");
    if (subMenu) {
      timeoutId = setTimeout(() => {
        subMenu.classList.remove("nav-show");
      }, 500); // Prevent menu from closing too quickly when you move the mouse
    }
  });
});
