(function () {
    "use strict";

    // Helper function to select elements
    function select(selector) {
        return document.querySelector(selector);
    }

    // Helper function to smoothly scroll to a target
    function scrollto(target) {
        // Implementation for smooth scrolling goes here
        // You may use window.scrollTo or other methods
    }

    /**
     * Mobile nav toggle
     */
    const handleMobileNavToggle = function (e) {
        const navbar = select("#navbar");

        // Periksa apakah elemen navbar ada dan tidak null
        if (navbar && navbar.classList) {
            navbar.classList.toggle("navbar-mobile");
            this.classList.toggle("bi-list");
            this.classList.toggle("bi-x");
        } else {
            console.error(
                "Navbar element not found or does not have classList property"
            );
        }
    };

    select(".mobile-nav-toggle").addEventListener(
        "click",
        handleMobileNavToggle
    );

    /**
     * Mobile nav dropdowns activate
     */
    const handleNavbarDropdown = function (e) {
        const navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
            e.preventDefault();
            this.nextElementSibling.classList.toggle("dropdown-active");
        }
    };

    const dropdownLinks = document.querySelectorAll(".navbar .dropdown > a");
    dropdownLinks.forEach(function (link) {
        link.addEventListener("click", handleNavbarDropdown, true);
    });

    /**
     * Slider carousel indicators
     */
    document.addEventListener('DOMContentLoaded', function () {
        // Inisialisasi Carousel
        var myCarousel = new bootstrap.Carousel(document.getElementById('sliderCarousel'), {
          interval: 5000, // Interval antara slide (dalam milidetik)
          wrap: true, // Putar ulang slider setelah mencapai slide terakhir
          keyboard: true // Aktifkan navigasi keyboard
        });
    
        // Mengatur indikator carousel
        var indicatorsContainer = document.getElementById('slider-carousel-indicators');
        var slides = document.querySelectorAll('.carousel-item');
    
        slides.forEach(function (slide, index) {
          var indicator = document.createElement('li');
          indicator.setAttribute('data-bs-target', '#sliderCarousel');
          indicator.setAttribute('data-bs-slide-to', index.toString());
    
          if (index === 0) {
            indicator.classList.add('active');
          }
    
          indicatorsContainer.appendChild(indicator);
        });
      });

    /**
     * Scroll with offset on links with a class name .scrollto
     */
    const handleScrollTo = function (e) {
        const hashTarget = select(this.hash);
        if (hashTarget) {
            e.preventDefault();

            const navbar = select("#navbar");
            if (navbar.classList.contains("navbar-mobile")) {
                navbar.classList.remove("navbar-mobile");
                const navbarToggle = select(".mobile-nav-toggle");
                navbarToggle.classList.toggle("bi-list");
                navbarToggle.classList.toggle("bi-x");
            }
            scrollto(this.hash);
        }
    };

    const scrollToLinks = document.querySelectorAll(".scrollto");
    scrollToLinks.forEach(function (link) {
        link.addEventListener("click", handleScrollTo, true);
    });
})();
