const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});
siderbarClose.addEventListener("click" , () =>{
    nav.classList.remove("active");
});

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});

const myTimeout = setTimeout(myGreeting, 3000);

function myGreeting() {
  document.getElementById("loader").style.display = "none";
}


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
    loop: true,

    slidesPerView: "1",  

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
  
    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
    breakpoints: {
    
        100: {
          slidesPerView:1,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        767: {
          slidesPerView:1,
          spaceBetween: 0,
        },
      },
  });


  
// ------- projects slider-----
const projectsslider = new Swiper('.projectsslider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay:true,
  nav:true,



  navigation: {
    nextEl: '.swiper-button-next2',
    prevEl: '.swiper-button-prev2',
  },

 
});
// ------- projects slider-----

// ------- projects slider-----
const projectimageslider = new Swiper('.projectimageslider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay:true,



  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

 
});
// ------- projects slider-----



$("#closepop").click(function(){
    $("#popup1").hide();
})


if (window.location.href === "https://allyproperties.pk/societies/index.php" || window.location.href === "https://allyproperties.pk/projects/index.php" ||
    window.location.href === "https://allyproperties.pk/projects/"  ||
    window.location.href === "https://allyproperties.pk/societies/" ||
      window.location.href === "https://allyproperties.pk/single-blog/" 
) {
  window.location.href = "https://allyproperties.pk/";
}

if (window.location.protocol === 'http:') {
  window.location.href = 'https://' + window.location.host + window.location.pathname;
}

 if (window.location.href.includes("404")) {
    // Redirect to the desired URL
    window.location.href = "https://allyproperties.pk";
  }
  
  
  const listings = new Swiper('.listingslider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay:true,
  
  //   effect: slide,
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 5,
        },
        768: {
          slidesPerView: 2,
          spaceBetween:5,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 5,
        },
        1200:{
          slidesPerView: 3,
          spaceBetween: 5,
        },
      },
    // And if we need scrollbar
  //   scrollbar: {
  //     el: '.swiper-scrollbar',
  //   },
  });