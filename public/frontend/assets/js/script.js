const menu = document.querySelector(".menu");
const menuSection = menu.querySelector(".menu-section");
const menuArrow = menu.querySelector(".menu-mobile-arrow");
const menuClosed = menu.querySelector(".menu-mobile-close");
const menuTrigger = document.querySelector(".menu-mobile-trigger");
const menuOverlay = document.querySelector(".overlay");
let subMenu;
menuSection.addEventListener("click", (e) => {
  if (!menu.classList.contains("active")) {
    return;
  }
  if (e.target.closest(".menu-item-has-children")) {
    const hasChildren = e.target.closest(".menu-item-has-children");
    showSubMenu(hasChildren);
  }
});
menuArrow.addEventListener("click", () => {
  hideSubMenu();
});
menuTrigger.addEventListener("click", () => {
  toggleMenu();
});
menuClosed.addEventListener("click", () => {
  toggleMenu();
});
menuOverlay.addEventListener("click", () => {
  toggleMenu();
});
function toggleMenu() {
  menu.classList.toggle("active");
  menuOverlay.classList.toggle("active");
}
function showSubMenu(hasChildren) {
  subMenu = hasChildren.querySelector(".menu-subs");
  subMenu.classList.add("active");
  subMenu.style.animation = "slideLeft 0.5s ease forwards";
  const menuTitle =
    hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
  menu.querySelector(".menu-mobile-title").innerHTML = menuTitle;
  menu.querySelector(".menu-mobile-header").classList.add("active");
}
function hideSubMenu() {
  subMenu.style.animation = "slideRight 0.5s ease forwards";
  setTimeout(() => {
    subMenu.classList.remove("active");
  }, 300);
  menu.querySelector(".menu-mobile-title").innerHTML = "";
  menu.querySelector(".menu-mobile-header").classList.remove("active");
}
window.onresize = function () {
  if (this.innerWidth > 991) {
    if (menu.classList.contains("active")) {
      toggleMenu();
    }
  }
};


// Scroll
		
$(document).scroll(function () {
$(this).scrollTop() > 500
  ? $(".floating_wrap").fadeIn()
  : $(".floating_wrap").fadeOut();
}),
$(document).ready(function () {
$(".floating_strip .rotatekaro a").on("click", function (e) {
  $(".floating_form").toggleClass("open"),
    $("body").toggleClass("notscroll"),
    e.preventDefault();
});
});
$(window).scroll(function () {
  $(this).scrollTop() >= 50
    ? $("#return-to-top").fadeIn(200)
    : $("#return-to-top").fadeOut(200);
}),
$("#return-to-top").click(function () {
  $("body,html").animate({ scrollTop: 0 }, 500);
});

// $("#popup-closed").click(function () {
//   $("#popup").removeClass("acttive"),
//     setTimeout(() => {
//       $("body").css({ overflow: "auto" });
//     }, 400);
// }),
// $(".popup-open").click(function () {
//   $("#popup").addClass("acttive"), $("body").css({ overflow: "hidden" });
// });

        
$(".reviewSlider").owlCarousel({
  items: 2,
  margin: 10,
  loop: true,
  stagePadding: 20,
  nav: true,
  navText:false,
  dots: true, 
  dotsEach: true,
  lazyLoad: false,
  autoplay: true,
  autoplaySpeed: 2000,
  navSpeed: 2000,
  pagination:true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1,
      pagination:true,
    },
    1000:{
      items:5,
      pagination:true,
    }
  }
});
 

