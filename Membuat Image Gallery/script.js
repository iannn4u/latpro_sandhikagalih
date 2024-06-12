const container = document.querySelector(".container");
const jumbo = document.querySelector(".jumbo");
const thumbnails = document.querySelectorAll(".thumbnails");
let active = null;
container.addEventListener("click", (e) => {
  if (e.target.className == "thumbnail") {
    if (active != null) active.classList.remove("active");
    jumbo.src = e.target.src;
    jumbo.classList.add("fade");
    setTimeout(() => {
      jumbo.classList.remove("fade");
    }, 500);
    thumbnails.forEach((thumbnail) => {
      thumbnail.className = "thumb";
    });
    e.target.classList.add("active");
    active = e.target
  }
});
