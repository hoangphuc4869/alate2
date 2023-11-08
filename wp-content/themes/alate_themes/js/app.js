var bars = document.querySelector(".main-menu i");
var menu_mobile_wrap = document.querySelector(".menu-wrap");
var menu_mobile = document.querySelector(".menu-wrap .menu-pc");
bars.addEventListener("click", () => {
  menu_mobile_wrap.classList.add("show-mobile");
  menu_mobile.classList.add("show-menu");
});

menu_mobile_wrap.addEventListener("click", (e) => {
  if (menu_mobile_wrap.contains(e.target) && !menu_mobile.contains(e.target)) {
    menu_mobile_wrap.classList.remove("show-mobile");
    menu_mobile.classList.remove("show-menu");
  }
});

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".FeedbackSwiper", {
  spaceBetween: 30,
  loop: true,

  pagination: {
    el: ".swiper-pagination-feed",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next-feed",
    prevEl: ".swiper-button-prev-feed",
  },
});

var swiper = new Swiper(".RoomImgs", {
  slidesPerView: 1,
  loop: true,

  pagination: {
    el: ".swiper-pagination-room",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next-room",
    prevEl: ".swiper-button-prev-room",
  },
});

var swiper = new Swiper(".ProjectSwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    1000: {
      slidesPerView: 4,
    },
  },
});

const angleDowns = document.querySelectorAll(".tabs i");
const list = document.querySelectorAll(".list-tab");
var isArrowDown = new Array(angleDowns.length).fill(true);

if (angleDowns.length > 0 && list.length > 0) {
  for (var i = 0; i < list.length; i++) {
    list[i].classList.add("hide");
    angleDowns[i].classList.remove("fa-minus");
    angleDowns[i].classList.add("fa-plus");
  }
  list[0].classList.add("show");
  angleDowns[0].classList.remove("fa-plus");
  angleDowns[0].classList.add("fa-minus");
}

if (angleDowns) {
  angleDowns.forEach((angle, index) => {
    angle.addEventListener("click", () => {
      list.forEach((tab, tabIndex) => {
        if (tabIndex === index) {
          tab.classList.toggle("show");
        } else {
          tab.classList.remove("show");
        }
      });

      angleDowns.forEach((arrow, arrowIndex) => {
        if (arrowIndex === index) {
          arrow.classList.toggle("fa-minus");
          arrow.classList.toggle("fa-plus");
        } else {
          arrow.classList.remove("fa-minus");
          arrow.classList.add("fa-plus");
        }
      });
    });
  });
}

let more = document.querySelector(".load-more");
let current_items = 4;

if (more) {
  more.addEventListener("click", () => {
    let rooms = [...document.querySelectorAll(".room-wrap")];
    for (var i = current_items; i < current_items + 4; i++) {
      if (rooms[i]) {
        rooms[i].style.display = "block";
      }
    }
    current_items += 4;
    if (current_items >= rooms.length) {
      more.style.opacity = "0.5";
      more.style.pointerEvents = "none";
    }
  });
}

$(".grid-imgs").magnificPopup({
  delegate: "a",
  type: "image",
  gallery: {
    enabled: true,
  },
  zoom: {
    enabled: true,

    duration: 300,
    easing: "ease-in-out",
  },
});

$(`input[type="number"]`).each(function (i, obj) {
  $(this).before(
    '<span class="selectNumber__increase selectNumber__change">+</span>'
  );
  $(this).after(
    '<span class="selectNumber__decrease selectNumber__change">-</span>'
  );

  $(this).val(0);
});

$(".selectNumber__increase").on("click", function (e) {
  $oldValue = $(this).next("input").val();

  $newValue = parseInt($oldValue) + 1;
  $(this).next("input").val($newValue);
});

$(".selectNumber__decrease").on("click", function (e) {
  var $input = $(this).prev("input");
  var $oldValue = parseInt($input.val());

  if ($oldValue > 0) {
    var $newValue = $oldValue - 1;
    $input.val($newValue);
  }
});
