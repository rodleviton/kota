$(document).ready(function() {
  // Smooth scroll
  smoothScroll.init({
    selector: ".nav-link", // Selector for links (must be a valid CSS selector)
    selectorHeader: "#navbar", // Selector for fixed headers (must be a valid CSS selector)
    speed: 500, // Integer. How fast to complete the scroll in milliseconds
    easing: "easeInOutCubic", // Easing pattern to use
    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    updateURL: false // Boolean. If true, update the URL hash on scroll
  });

  // Testimonial carousel
  $(".owl-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      }
    }
  });

  // FAQs Accordion
  $(".accordion").collapse();
});
