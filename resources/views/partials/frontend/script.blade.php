<script src="{{ asset('assets/frontend/js/jquery.js') }}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/frontend/js/schunk-1.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/js/schunk-2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/js/schunk-3.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/js/web.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/frontend/js/gsap.min.js') }}" type="text/javascript"></script>

<script>
    // Initialize Lenis
    const lenis = new Lenis({
        smooth: true,
        lerp: 0.1,
        wheelMultiplier: 1,
        infinite: false,
    });

    // Use requestAnimationFrame to continuously update the scroll
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
</script>

<script>

    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            $('.navbar').addClass('drop-shadow');

            $('.navbar_logo').removeClass('w-15-rem');
            $('.navbar_logo').addClass('w-3-rem');

            $('.navbar_creative-text').removeClass('fs-2-5-rem');
            $('.navbar_creative-text').addClass('fs-1-rem');

        } else {
            $('.navbar').removeClass('drop-shadow');

            $('.navbar_logo').removeClass('w-3-rem');
            $('.navbar_logo').addClass('w-15-rem');

            $('.navbar_creative-text').removeClass('fs-1-rem');
            $('.navbar_creative-text').addClass('fs-2-5-rem');

        }
    }

    $(".section_cta").each(function () {
        // Select key elements inside each CTA section
        let visualWrap = $(this).find(".interaction_visual_wrap"); // Container where the image clones will be animated
        let template = $(this).find(".interaction_img_wrap"); // Image template to clone
        let cmsItem = $(this).find(".interaction_cms_item"); // All CMS items with images
        let activeItem = cmsItem.first(); // Start with the first CMS item

        // Function to get the next image URL (loops through CMS items)
        function getNextUrl() {
            activeItem = activeItem.next(); // Move to the next item
            if (activeItem.length === 0) activeItem = cmsItem.first(); // Loop back if at the end
            return activeItem.find("img").attr("src"); // Return the image URL
        }

        // Track mouse position
        let xPosition = 0;
        let yPosition = 0;

        // Mouse move handler
        $(this).on("mousemove", function (e) {
            let xDistance = xPosition;
            let yDistance = yPosition;

            // Only trigger animation if mouse moved significantly
            if (Math.abs(xPosition - e.pageX) > 100 || Math.abs(yPosition - e.pageY) > 100) {
                xPosition = e.pageX;
                yPosition = e.pageY;

                // Clone the image template and append to the visual container
                let imageWrap = template.clone().appendTo(visualWrap);
                imageWrap.find("img").attr("src", getNextUrl()); // Set image source

                // Create GSAP timeline animation
                let tl = gsap.timeline({
                    onComplete: () => {
                        imageWrap.remove();
                    }, // Remove the clone after animation completes
                });

                // Fade in the image clone
                tl.fromTo(imageWrap, { opacity: 0 }, { opacity: 1, duration: 0.2 });

                // Animate movement from previous to current mouse position
                tl.fromTo(
                    imageWrap,
                    { x: xDistance, y: yDistance - window.scrollY },
                    { x: xPosition, y: yPosition - window.scrollY, duration: 0.5 },
                    "<" // Start at same time as previous animation
                );

                // Fade out and shrink the image
                tl.to(imageWrap.find("img"), { opacity: 0, scale: 0.6, duration: 0.2 });
            }
        });
    });
</script>
