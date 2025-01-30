
// Json Lottie
document.addEventListener("DOMContentLoaded", function () {
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-product").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/fin-pro1.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-product2").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/fin-pro2.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-product3").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/fin-pro3.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-product4").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/fin-pro4.json", // Path to the Lottie JSON file
        });
    });
});

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