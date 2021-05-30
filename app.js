let mybutton = document.getElementById("myBtn");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

const collapse = document.querySelector(".navbar-collapse");

const navLink = document.querySelectorAll(".nav-link");

const toggleButton = document.getElementById("togglerBtn");

navLink.forEach(function (e) {
  e.addEventListener("click", function () {
    collapse.classList.toggle("show");
  });
});
