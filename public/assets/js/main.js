$(document).ready(function () {
    /**
     * Mobile nav toggle
     */
    $(".mobile-nav-toggle").on("click", function () {
        const navbar = $("#navbar");

        if (navbar.length && navbar.hasClass("navbar-mobile")) {
            navbar.toggleClass("navbar-mobile");
            $(this).toggleClass("bi-list bi-x");
        } else {
            console.error("Navbar element not found or does not have classList property");
        }
    });

    /**
     * Mobile nav dropdowns activate
     */
    $(".navbar .dropdown > a").on("click", function (e) {
        const navbar = $("#navbar");

        if (navbar.length && navbar.hasClass("navbar-mobile")) {
            e.preventDefault();
            $(this).next().toggleClass("dropdown-active");
        }
    });

    /**
     * Slider carousel indicators
     */
    $(document).ready(function () {
        // Initialization of Carousel
        $("#sliderCarousel").carousel({
            interval: 5000, // Interval between slides (in milliseconds)
            wrap: true, // Rewind slider after reaching the last slide
            keyboard: true // Enable keyboard navigation
        });

        // Setting carousel indicators
        var indicatorsContainer = $("#slider-carousel-indicators");
        $(".carousel-item").each(function (index) {
            var indicator = $("<li>")
                .attr("data-bs-target", "#sliderCarousel")
                .attr("data-bs-slide-to", index.toString());

            if (index === 0) {
                indicator.addClass("active");
            }

            indicatorsContainer.append(indicator);
        });
    });

    /**
     * Scroll with offset on links with a class name .scrollto
     */
    $(".scrollto").on("click", function (e) {
        const hashTarget = $($(this).attr("href"));

        if (hashTarget.length) {
            e.preventDefault();

            const navbar = $("#navbar");
            if (navbar.length && navbar.hasClass("navbar-mobile")) {
                navbar.removeClass("navbar-mobile");
                $(".mobile-nav-toggle").toggleClass("bi-list bi-x");
            }

            // Smooth scroll to the target
            $("html, body").animate({
                scrollTop: hashTarget.offset().top
            }, 1000);
        }
    });

    $(document).ready(function () {
        // Array to store checked checkbox values
        var checkedValues = [];

        // Store initial checked state
        $('.form-check-input').each(function () {
            if ($(this).is(':checked')) {
                checkedValues.push($(this).val());
            }
        });

        $('.form-check-input').on('change', function () {
            // Update the array based on the checkbox state
            if ($(this).is(':checked')) {
                checkedValues.push($(this).val());
            } else {
                // Remove the value from the array if the checkbox is unchecked
                checkedValues = checkedValues.filter(function (value) {
                    return value !== $(this).val();
                });
            }
        });

        // Apply filter logic
        $('#applyFilterButton').on('click', function () {
            // Restore checked state after applying the filter
            $('.form-check-input').each(function () {
                var checkboxValue = $(this).val();

                if (checkedValues.includes(checkboxValue)) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            });

            // Submit the form
            $('#filterForm').submit();
        });
    });    
    
});