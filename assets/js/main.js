async function alertThis(x){
  await alert(x)
  return location.reload()
}

function escapeHtml(text) {
  var map = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };
  return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}

// function previewBlogImg(){
//   blogImage.onchange = evt => {
//     blogImageName = blogImagePath+blogImage.files[0].name
//     const [file] = blogImage.files
//     if (file) {
//       blogImagePreview.src = URL.createObjectURL(file)
//     }
//   }
// }

// animateCSS = function(element, animation, prefix = 'animate__'){
//   new Promise((resolve, reject) => {
//     const animationName = `${prefix}${animation}`;
//     const node = document.querySelector(element);

//     node.classList.add(`${prefix}animated`, animationName);
//     function handleAnimationEnd(event) {
//       event.stopPropagation();
//       node.classList.remove(`${prefix}animated`, animationName);
//       resolve('Animation ended');
//     }
//     node.addEventListener('animationend', handleAnimationEnd, {once: true});
//   });
// }

/**
* Template Name: Techie - v4.9.0
* Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
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
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 16
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

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
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

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

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()

function displayFooter(){
  $('.footer').append(
  '  <footer id="footer">'+
  ''+
  '<div class="footer-top">'+
  '  <div class="container">'+
  '    <div class="row">'+
  ''+
  '      <div class="col-lg-3 col-md-6 footer-contact">'+
  '        <h1 class="logo"><a href="main"><img src="assets/img/silverpayx-high-resolution-logo-color-on-transparent-background.png" class="img-fluid animated" alt=""></a></h1>'+
  '        <p>'+
  '          <strong>Email:</strong> silverpayx@gmail.com<br>'+
  '        </p>'+
  '      </div>'+
  ''+
  '      <div class="col-lg-3 col-md-6 footer-links">'+
  '        <h4>Useful Links</h4>'+
  '        <ul>'+
  '          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>'+
  '          <li><i class="bx bx-chevron-right"></i> <a href="#">Features</a></li>'+
  // '          <li><i class="bx bx-chevron-right"></i> <a href="#">Blogs</a></li>'+
  '          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>'+
  '          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>'+
  '        </ul>'+
  '      </div>'+
  ''+
  '      <div class="col-lg-3 col-md-6 footer-links">'+
  '        <h4>Mentions</h4>'+
  '        <ul>'+
  '          <li><i class="bx bx-chevron-right"></i> <a href="#">Bootstrap made</a></li>'+
  '          <li><i class="bx bx-chevron-right"></i> <a href="#">Arldev</a></li>'+
  '        </ul>'+
  '      </div>'+
  ''+
  '      <div class="col-lg-4 col-md-6 footer-newsletter">'+
  ''+
  '      </div>'+
  ''+
  '    </div>'+
  '  </div>'+
  '</div>'+
  ''+
  '<div class="container">'+
  ''+
  '  <div class="copyright-wrap d-md-flex py-4">'+
  '    <div class="me-md-auto text-center text-md-start">'+
  '      <div class="copyright">'+
  '        &copy; Copyright <strong><span>Silverpayx</span></strong>. All Rights Reserved'+
  '      </div>'+
  '      <div class="credits">'+
  '        <!-- All the links in the footer should remain intact. -->'+
  '        <!-- You can delete the links only if you purchased the pro version. -->'+
  '        <!-- Licensing information: https://bootstrapmade.com/license/ -->'+
  '        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->'+
  '        Template design <a href="https://bootstrapmade.com/">BootstrapMade</a>'+
  '      </div>'+
  '    </div>'+
  // '    <div class="social-links text-center text-md-right pt-3 pt-md-0">'+
  // '      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>'+
  // '      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>'+
  // '      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>'+
  // '      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>'+
  // '    </div>'+
  '  </div>'+
  '</div>'+
  '</footer>'
  )
  }