
gsap.registerPlugin(ScrollTrigger);

// feature section
let sm1 = gsap.matchMedia();

sm1.add("(min-width: 1200px)", () => {
    // Bottom to top scroll animation for .fade-up
    gsap.fromTo(
        ".fade-up",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "20deg",
            y: "20vh", // Start 30% of viewport height below (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            y: "0", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Start when the bottom of the element reaches the bottom of the viewport
                end: "bottom bottom-=10%", // End when the top of the element reaches the top of the viewport
                scrub: 1, // Sync the animation with scroll position
            },
        }
    );

    // Bottom to top scroll animation for .fade-Down
    gsap.fromTo(
        ".fade-down",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "5deg",
            y: "-10vh", // Start 30% of viewport height below (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            y: "0", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Start when the bottom of the element reaches the bottom of the viewport
                end: "bottom bottom-=10%", // End when the top of the element reaches the top of the viewport
                scrub: 1, // Sync the animation with scroll position
            },
        }
    );

    // Animation for .fade-right (left to center)
    gsap.fromTo(
        ".fade-right",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "20deg",
            x: "-20vw", // Start from left side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Starts when the top of the section reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

    // Animation for .fade-left (right to center)
    gsap.fromTo(
        ".fade-left",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "20deg",
            x: "20vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

    // Zoom in
    gsap.fromTo(
        ".zoom-in",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );
    // Zoom in
    gsap.fromTo(
        ".zoom-in_ai_enhance",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".fz_ai_enhance_sec",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );


    // Zoom in
    gsap.fromTo(
        ".zoom-in-cbs",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".cbs_sec",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

    // Zoom in
    gsap.fromTo(
        ".zoom-in-fe",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".fz_features_sec",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

    // Animation for .fade-right (left to center)
    gsap.fromTo(
        ".fade-right-hand",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "20deg",
            x: "-20vw", // Start from left side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".fz_get_in_touch",
                start: "top bottom", // Starts when the top of the section reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );
});

//Product Range

$(document).ready(function () {
    $("#product-range").owlCarousel({
        items: 2,
        margin: 35,
        nav: true /* Shows previous and next arrows */,
        dots: false,
        autoplay: false,
        smartSpeed: 2000,
        autoplayTimeout: 4000,
        navText: [
            '<span class="custom-prev"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg></span>',
            '<span class="custom-next"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg></span>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
});

