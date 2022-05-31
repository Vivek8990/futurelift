var menu = document.querySelector('#manu-bars');
var navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-itmes');
    navbar.classList.toggle('active');
}




    document.getElementById('mySearch').addEventListener('click',function(){
			var x = document.getElementById('myUl');
			if(x.style.display == 'none'){
				x.style.display = 'block';
			}else{
				x.style.display = 'none';
			}
		});

    function myFunction() {
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("mySearch");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUl");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  }

    var swiper = new Swiper(".pertnerSwiper",{
  slidesPerView: 10,
  spaceBetween: 5,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  effect: 'slide',
  autoplay:{
    delay:2000
  },
  
});

  var swiper = new Swiper(".topSwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: false,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    350: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    450: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});


var swiper = new Swiper(".cardDetails", {
        slidesPerView: 10,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: false,
        centeredSlides: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          320: {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 3,
          },
          450: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 10,
          },
        },
      });
      var swiper = new Swiper(".topCardDetails", {
        slidesPerView: 5,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          350: {
            slidesPerView: 3,
            spaceBetween: 20,
            slidesPerGroup: 1,
          },
          450: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
            slidesPerGroup: 1
          },
        },
      });
      var swiper = new Swiper(".homeSwper", {
        spaceBetween: 30,
        effect: "slide",
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: false,
        },
      });
      var swiper = new Swiper(".reviwSwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      
      });

      $(document).ready(function(){
        setTimeout(function(){
          $('#mainPopUp').css('display','block');
        },35000);
      })
      $('#closeBtn').click(function() {
        $('#mainPopUp').css('display','none');
      });

      var swiper = new Swiper(".mySwiper1", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
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

      $(document).ready(function(){
        setTimeout(function(){
          $('#mainPopUp').css('display','block');
        },35000);
      })
      $('#closeBtn').click(function() {
        $('#mainPopUp').css('display','none');
      });


      // for form
      function validation(){
        var user = document.getElementById('user').value;
        var mail = document.getElementById('emails').value;
        var pass = document.getElementById('pass').value;
        var conPas = document.getElementById('conPas').value;
        var mob = document.getElementById('mobile');
        
        if(user == ''){
          document.getElementById('username').innerHTML = "Please complete your name";
          return false;
        }
        if((user.length <=2)||(user.length >15)){
          document.getElementById('username').innerHTML = "user name must be 15 characters";
          return false;
        }
        if(!isNaN(user)){
          document.getElementById('username').innerHTML = "only characters are allowed";
          return false;
        }
        if(mail == ''){
          document.getElementById('mailids').innerHTML = "Please complete your mail id";
          return false;
        }
        if(mob == ''){
          document.getElementById('mobileNum').innerHTML = "enter valid numbar";
          return false;
        }
        if(pass == ''){
          document.getElementById('password').innerHTML = "Please complete your password";
          return false;
        }
        if((pass.length <=5)||(pass.length >8)){
          document.getElementById('password').innerHTML = "password must be 8 characters";
          return false;
        }
        if(pass!=conPas){
          document.getElementById('confirmPasword').innerHTML = "password mot match";
          return false;
        }
        








        if(conPas == ''){
          document.getElementById('confirmPasword').innerHTML = "Please confirm your password";
          return false;
        }
      }
      
      var swiper = new Swiper(".referParnerSwiper", {
        slidesPerView: 8,
        spaceBetween: 30,
        slidesPerGroup: 4,
        hashNavigation: {
          watchState: true,
          autoplay:true,
          
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints:{
          375:{
slidesPerView:4,
slidesPerGroup: 1
          }
        },
         
      });

     
     
 /**
* Template Name: Presento - v3.7.0
* Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  // const scrollto = (el) => {
  //   let header = select('#header')
  //   let offset = header.offsetHeight

  //   if (!header.classList.contains('header-scrolled')) {
  //     offset -= 16
  //   }

  //   let elementPos = select(el).offsetTop
  //   window.scrollTo({
  //     top: elementPos - offset,
  //     behavior: 'smooth'
  //   })
  // }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  // let selectHeader = select('#header')
  // if (selectHeader) {
  //   const headerScrolled = () => {
  //     if (window.scrollY > 100) {
  //       selectHeader.classList.add('header-scrolled')
  //     } else {
  //       selectHeader.classList.remove('header-scrolled')
  //     }
  //   }
  //   window.addEventListener('load', headerScrolled)
  //   onscroll(document, headerScrolled)
  // }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  // on('click', '.mobile-nav-toggle', function(e) {
  //   select('#navbar').classList.toggle('navbar-mobile')
  //   this.classList.toggle('bi-list')
  //   this.classList.toggle('bi-x')
  // })

  /**
   * Mobile nav dropdowns activate
   */
  // on('click', '.navbar .dropdown > a', function(e) {
  //   if (select('#navbar').classList.contains('navbar-mobile')) {
  //     e.preventDefault()
  //     this.nextElementSibling.classList.toggle('dropdown-active')
  //   }
  // }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  // on('click', '.scrollto', function(e) {
  //   if (select(this.hash)) {
  //     e.preventDefault()

  //     let navbar = select('#navbar')
  //     if (navbar.classList.contains('navbar-mobile')) {
  //       navbar.classList.remove('navbar-mobile')
  //       let navbarToggle = select('.mobile-nav-toggle')
  //       navbarToggle.classList.toggle('bi-list')
  //       navbarToggle.classList.toggle('bi-x')
  //     }
  //     scrollto(this.hash)
  //   }
  // }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  // window.addEventListener('load', () => {
  //   if (window.location.hash) {
  //     if (select(window.location.hash)) {
  //       scrollto(window.location.hash)
  //     }
  //   }
  // });
  /**
   * Clients Slider
   */
  // new Swiper('.clients-slider', {
  //   speed: 400,
  //   loop: true,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   breakpoints: {
  //     320: {
  //       slidesPerView: 2,
  //       spaceBetween: 40
  //     },
  //     480: {
  //       slidesPerView: 3,
  //       spaceBetween: 60
  //     },
  //     640: {
  //       slidesPerView: 4,
  //       spaceBetween: 80
  //     },
  //     992: {
  //       slidesPerView: 6,
  //       spaceBetween: 120
  //     }
  //   }
  // });

  /**
   * Porfolio isotope and filter
   */
  // window.addEventListener('load', () => {
  //   let portfolioContainer = select('.portfolio-container');
  //   if (portfolioContainer) {
  //     let portfolioIsotope = new Isotope(portfolioContainer, {
  //       itemSelector: '.portfolio-item',
  //       layoutMode: 'fitRows'
  //     });

  //     let portfolioFilters = select('#portfolio-flters li', true);

  //     on('click', '#portfolio-flters li', function(e) {
  //       e.preventDefault();
  //       portfolioFilters.forEach(function(el) {
  //         el.classList.remove('filter-active');
  //       });
  //       this.classList.add('filter-active');

  //       portfolioIsotope.arrange({
  //         filter: this.getAttribute('data-filter')
  //       });
  //       portfolioIsotope.on('arrangeComplete', function() {
  //         AOS.refresh()
  //       });
  //     }, true);
  //   }

  // });

  /**
   * Initiate portfolio lightbox 
   */
  // const portfolioLightbox = GLightbox({
  //   selector: '.portfolio-lightbox'
  // });

  // /**
  //  * Portfolio details slider
  //  */
  // new Swiper('.portfolio-details-slider', {
  //   speed: 400,
  //   loop: true,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   }
  // });

  /**
   * Testimonials slider
   */
  // new Swiper('.testimonials-slider', {
  //   speed: 600,
  //   loop: true,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   },
  //   breakpoints: {
  //     320: {
  //       slidesPerView: 1,
  //       spaceBetween: 20
  //     },

  //     1200: {
  //       slidesPerView: 3,
  //       spaceBetween: 20
  //     }
  //   }
  // });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()

// copy code
function copy(){
  var copy = document.getElementById('copyCode');
  copy.select();
  navigator.clipboard.writeText(copy.value);
  alert('copied the text' + copy.value);
}

function copyLink(){
  var copy = document.getElementById('floatingInput');
  copy.select();
  navigator.clipboard.writeText(copy.value);
  alert('copied the text' + copy.value);
}




// window.onscroll = () => {
//     menu.classList.remove('fa-itmes');
//     navbar.classList.remove('active');
// }

    // var swiper = new Swiper(".mySwiper1", {
    //   pagination: {
    //     el: ".swiper-pagination",
    //     type: "fraction",
    //   },
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //   },
    // });