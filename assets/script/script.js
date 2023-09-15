const navbarButton = document.querySelector("#navbar-button");
const navbarDefault = document.querySelector("#navbar-default");

var navbarState = false;

navbarButton.addEventListener("click", () => {
  if (!navbarState) {
    navbarDefault.classList.remove("hidden");
    navbarButton.querySelector("#bar").classList.add("hidden");
    navbarButton.querySelector("#close").classList.remove("hidden");
    navbarButton.querySelector("div").innerHTML = "Close";
  } else {
    navbarDefault.classList.add("hidden");
    navbarButton.querySelector("#bar").classList.remove("hidden");
    navbarButton.querySelector("#close").classList.add("hidden");
    navbarButton.querySelector("div").innerHTML = "Home";
  }
  navbarState = !navbarState;
});
