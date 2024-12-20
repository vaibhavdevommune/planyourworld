$(document).ready(function () {
    $(".menu-heading").on("click", function (e) {
        e.stopPropagation(); // Prevent click propagation

        const submenu = $(this).next(".submenu");
        const icon = $(this).find("i");

        // Toggle the submenu with slide animation
        submenu.slideToggle(300, function () {
            // Apply a smooth transition to icon change
            icon.css({
                transition: "transform 0.3s ease-in-out"
            });

            // Update the icon based on the submenu state
            if (submenu.is(":visible")) {
                icon.removeClass("bi-chevron-down").addClass("bi-chevron-up");
            } else {
                icon.removeClass("bi-chevron-up").addClass("bi-chevron-down");
            }
        });

        // Close other submenus and reset their icons
        $(".submenu").not(submenu).slideUp(300).prev(".menu-heading").find("i")
            .removeClass("bi-chevron-up").addClass("bi-chevron-down")
            .css({
                transition: "transform 0.3s ease-in-out"
            });
    });

    // Close all submenus when clicking outside
    $(document).on("click", function () {
        $(".submenu").slideUp(300);
        $(".menu-heading i").removeClass("bi-chevron-up").addClass("bi-chevron-down")
            .css({
                transition: "transform 0.3s ease-in-out"
            });
    });
});

$(document).ready(function () {
    const accordions = $(".accordion-item");
    const images = [
        "assets/images/image1.webp",
        "assets/images/image2.webp",
        "assets/images/image3.webp",
        "assets/images/image4.webp"
    ];

    let currentAccordionIndex = 0;

    // Function to animate the progress bar smoothly
    function startProgressBar(index) {
        const progressBar = accordions.eq(index).find(".progress-bar");
        progressBar.val(0); // Reset progress bar to 0
        let value = 0;

        // Smooth animation for the progress bar
        const interval = setInterval(() => {
            value += 2; // Increment progress by 2
            progressBar.val(value); // Update the progress bar

            if (value >= 100) {
                clearInterval(interval);
                // Move to the next accordion item after the progress bar completes
                openNextAccordion(index);
            }
        }, 100); // Adjust the interval for speed of the progress bar
    }

    // Function to open the next accordion and update the image
    function openNextAccordion(index) {
        const currentAccordion = accordions.eq(index);

        // Close the current accordion
        currentAccordion.find(".accordion-collapse").removeClass("show");
        currentAccordion.find(".accordion-button").addClass("collapsed");

        // Move to the next accordion
        currentAccordionIndex = (index + 1) % accordions.length;
        const nextAccordion = accordions.eq(currentAccordionIndex);

        // Open the next accordion
        nextAccordion.find(".accordion-collapse").addClass("show");
        nextAccordion.find(".accordion-button").removeClass("collapsed");

        // Update the image based on the next accordion's index
        $("#accordionImage").fadeOut(300, function () {
            $(this).attr("src", images[currentAccordionIndex]).fadeIn(300);
        });

        // Start the progress bar on the next accordion
        startProgressBar(currentAccordionIndex);
    }

    // Start the first progress bar when the page is ready
    startProgressBar(currentAccordionIndex);

    // Optional: Restart the process when an accordion item is manually clicked
    $(".accordion-button").on("click", function () {
        const clickedAccordionIndex = $(this).closest(".accordion-item").index();
        currentAccordionIndex = clickedAccordionIndex;
        startProgressBar(currentAccordionIndex);
    });

    var swiper = new Swiper(".media-coverage", {
        slidesPerView: 6,
        spaceBetween: 0,
        loop: true,
        centerSlide: true,
        fade: false,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: { slidesPerView: 1, },
            520: { slidesPerView: 2 },
            950: { slidesPerView: 6 },
        },
    })

    new Swiper(".testimonial-slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 5000,
        },
    });

    new Swiper(".review-slider", {
        slidesPerView: 1, 
        spaceBetween: 30, 
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true, 
        autoplay: {
            delay: 5000, 
            disableOnInteraction: false,
        },
    });

    const reviewVideoSlider = new Swiper('.review-video-slider', {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2500, 
            disableOnInteraction: false, 
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
});

