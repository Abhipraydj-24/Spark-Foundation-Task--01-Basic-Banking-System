//---------Javascript code for up-scroll button------------

const scrollbtn = document.querySelector(".scroll-btn");
window.addEventListener("scroll", () => {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollbtn.style.display = "block";
  } else {
    scrollbtn.style.display = "none";
  }
});
scrollbtn.addEventListener("click", () => {
  window.scroll({
    top: 0,
    behavior: "smooth",
  });
});